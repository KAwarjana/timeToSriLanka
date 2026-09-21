<?php
/**
 * Handles the "SEND MESSAGE" submission on about.php (#contact section).
 * Called via fetch() from about.js - always returns JSON.
 * Nothing is stored - this just validates the input and sends 2 emails.
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/mailer.php';
require_once __DIR__ . '/../includes/email-templates.php';

ttc_register_json_error_handler(); // guarantees valid JSON even if something fatals below

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    json_response(false, 'Invalid request method.');
}

try {

    $firstName = sanitize_input($_POST['firstName'] ?? '');
    $lastName  = sanitize_input($_POST['lastName'] ?? '');
    $email     = sanitize_input($_POST['email'] ?? '');
    $mobile    = sanitize_input($_POST['mobile'] ?? '');
    $subject   = sanitize_input($_POST['subject'] ?? '');
    $message   = sanitize_input($_POST['message'] ?? '');

    $errors = [];

    // ── Required fields ──────────────────────────────────────────
    if (ttc_strlen($firstName) < 2 || ttc_strlen($firstName) > 100) {
        $errors[] = 'First name must be between 2 and 100 characters.';
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || ttc_strlen($email) > 150) {
        $errors[] = 'Please enter a valid email address.';
    }

    if (ttc_strlen($message) < 10 || ttc_strlen($message) > 2000) {
        $errors[] = 'Message must be between 10 and 2000 characters.';
    }

    // ── Optional fields - validated only if the visitor typed something ──
    if ($lastName !== '' && ttc_strlen($lastName) > 100) {
        $errors[] = 'Last name must be under 100 characters.';
    }
    if ($mobile !== '' && !preg_match('/^[0-9+\-\s()]{7,20}$/', $mobile)) {
        $errors[] = 'Mobile number must be 7 to 20 digits.';
    }
    if ($subject !== '' && ttc_strlen($subject) > 150) {
        $errors[] = 'Subject must be under 150 characters.';
    }

    if (!empty($errors)) {
        json_response(false, $errors[0]);
    }

    $contact = [
        'first_name' => $firstName,
        'last_name'  => $lastName,
        'email'      => $email,
        'mobile'     => $mobile,
        'subject'    => $subject,
        'message'    => $message,
    ];

    // Email 1 - to the site owner
    send_mail(
        COMPANY_EMAIL,
        'New Contact Message - ' . ($subject !== '' ? $subject : $firstName),
        tpl_admin_new_contact($contact),
        $email
    );

    // Email 2 - auto-reply to the client
    send_mail(
        $email,
        'We\'ve Received Your Message - ' . SITE_NAME,
        tpl_client_contact_feedback($contact)
    );

    $successMsg = 'Message sent successfully!';
    // if (DEBUG_MODE) {
    //     $successMsg .= ' [DEBUG: ' . ttc_mail_debug_summary() . ']';
    // }
    json_response(true, $successMsg);

} catch (Throwable $e) {
    json_response(false, DEBUG_MODE
        ? 'Server error: ' . $e->getMessage() . ' (' . basename($e->getFile()) . ' line ' . $e->getLine() . ')'
        : 'Something went wrong. Please try again in a moment.'
    );
}
