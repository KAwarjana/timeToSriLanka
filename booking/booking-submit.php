<?php
/**
 * Handles the "BOOK NOW" submission on booking.php.
 * Called via fetch() from booking.js — always returns JSON.
 * Nothing is stored — this just validates the input and sends 2 emails.
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

    $fullName        = sanitize_input($_POST['fullName'] ?? '');
    $mobile          = sanitize_input($_POST['mobile'] ?? '');
    $email           = sanitize_input($_POST['email'] ?? '');
    $dateFrom        = sanitize_input($_POST['dateFrom'] ?? '');
    $dateTo          = sanitize_input($_POST['dateTo'] ?? '');
    $destination     = sanitize_input($_POST['destination'] ?? '');
    $persons         = sanitize_input($_POST['persons'] ?? '');
    $kids            = sanitize_input($_POST['kids'] ?? '');
    $kidsAgeGroup    = sanitize_input($_POST['kidsAgeGroup'] ?? '');
    $specialRequest  = sanitize_input($_POST['specialRequest'] ?? '');

    $errors = [];

    // ── Required fields ──────────────────────────────────────────
    if (ttc_strlen($fullName) < 2 || ttc_strlen($fullName) > 100) {
        $errors[] = 'Name must be between 2 and 100 characters.';
    }

    if ($mobile === '') {
        $errors[] = 'Please enter your mobile number.';
    } elseif (!preg_match('/^[0-9+\-\s()]{7,20}$/', $mobile)) {
        $errors[] = 'Mobile number must be 7 to 20 digits.';
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || ttc_strlen($email) > 150) {
        $errors[] = 'Please enter a valid email address.';
    }

    $fromDateObj = ttc_parse_date($dateFrom);
    $toDateObj   = ttc_parse_date($dateTo);
    $today       = new DateTime('today'); // midnight, in the Asia/Colombo timezone set in config.php

    if (!$fromDateObj) {
        $errors[] = 'Please select a valid travel start date.';
    } elseif ($fromDateObj < $today) {
        $errors[] = 'Travel start date cannot be in the past.';
    }

    if (!$toDateObj) {
        $errors[] = 'Please select a valid travel end date.';
    } elseif ($fromDateObj && $toDateObj < $fromDateObj) {
        $errors[] = 'Travel end date cannot be before the start date.';
    }

    if (ttc_strlen($destination) < 2 || ttc_strlen($destination) > 150) {
        $errors[] = 'Destination must be between 2 and 150 characters.';
    }

    if ($persons === '') {
        $errors[] = 'Please select the number of persons.';
    }

    // ── Optional fields — validated only if the visitor typed something ──
    if ($specialRequest !== '' && ttc_strlen($specialRequest) > 1000) {
        $errors[] = 'Special request must be under 1000 characters.';
    }
    if ($kidsAgeGroup !== '' && ttc_strlen($kidsAgeGroup) > 50) {
        $errors[] = 'Invalid kids age group.';
    }

    if (!empty($errors)) {
        json_response(false, $errors[0]);
    }

    $quotation = [
        'full_name'       => $fullName,
        'mobile'          => $mobile,
        'email'           => $email,
        'date_from'       => $dateFrom,
        'date_to'         => $dateTo,
        'destination'     => $destination,
        'persons'         => $persons,
        'kids'            => $kids,
        'kids_age_group'  => $kidsAgeGroup,
        'special_request' => $specialRequest,
    ];

    // Email 1 — to the site owner (includes everything needed to price the trip)
    send_mail(
        COMPANY_EMAIL,
        'New Quotation Request — ' . $fullName,
        tpl_admin_new_quotation($quotation),
        $email
    );

    // Email 2 — to the client, confirming receipt
    send_mail(
        $email,
        'We Received Your Quotation Request — ' . SITE_NAME,
        tpl_client_quotation_received($quotation)
    );

    $successMsg = 'Your request has been sent successfully! We will get back to you shortly with a quotation.';
    if (DEBUG_MODE) {
        $successMsg .= ' [DEBUG: ' . ttc_mail_debug_summary() . ']';
    }
    json_response(true, $successMsg);

} catch (Throwable $e) {
    json_response(false, DEBUG_MODE
        ? 'Server error: ' . $e->getMessage() . ' (' . basename($e->getFile()) . ' line ' . $e->getLine() . ')'
        : 'Something went wrong. Please try again in a moment.'
    );
}
