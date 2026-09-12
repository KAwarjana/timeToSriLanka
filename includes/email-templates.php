<?php
/**
 * All outgoing email templates live here — one wrapper (matching the
 * TimetoCeylon brand) plus a small builder function per email.
 * Nothing here touches a database — every function just takes an array of
 * values and returns HTML.
 */

/**
 * Wraps any inner HTML in the branded TimetoCeylon email shell.
 */
function build_email_html($heading, $bodyHtml, $ctaText = null, $ctaUrl = null) {
    $logo   = SITE_LOGO_URL;
    $year   = date('Y');
    $button = '';

    if ($ctaText && $ctaUrl) {
        $button = '
        <tr>
          <td align="center" style="padding:8px 0 30px 0;">
            <a href="' . htmlspecialchars($ctaUrl) . '" target="_blank"
               style="background:#260058;color:#ffffff;text-decoration:none;font-family:Arial,sans-serif;
                      font-size:15px;font-weight:bold;padding:14px 34px;border-radius:30px;display:inline-block;">
              ' . htmlspecialchars($ctaText) . '
            </a>
          </td>
        </tr>';
    }

    return '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title></title>
  <style>
    body,table,td,div,h1,h2,p {font-family: Arial, Helvetica, sans-serif;}
  </style>
</head>
<body style="margin:0;padding:0;background:#f1f1f1;">
  <table role="presentation" width="100%" style="border-collapse:collapse;background:#f1f1f1;">
    <tr>
      <td align="center" style="padding:30px 12px;">
        <table role="presentation" width="600" style="max-width:600px;width:100%;border-collapse:collapse;background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 2px 10px rgba(38,0,88,0.08);">

          <!-- Banner -->
          <tr>
            <td align="center" style="background:#260058;padding:26px 20px;">
              <img src="' . htmlspecialchars($logo) . '" alt="' . SITE_NAME . '" style="max-width:190px;height:auto;display:block;">
            </td>
          </tr>

          <!-- Heading -->
          <tr>
            <td style="padding:34px 34px 6px 34px;">
              <h1 style="margin:0 0 18px 0;font-size:22px;line-height:28px;color:#260058;">' . $heading . '</h1>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:0 34px 10px 34px;font-size:15px;line-height:23px;color:#333333;">
              ' . $bodyHtml . '
            </td>
          </tr>

          ' . $button . '

          <!-- Footer -->
          <tr>
            <td style="background:#f7f4fc;padding:22px 34px;border-top:1px solid #eee6fb;">
              <p style="margin:0 0 6px 0;font-size:13px;color:#666;font-family:Arial,sans-serif;">
                <strong style="color:#260058;">' . SITE_NAME . '</strong><br>
                ' . COMPANY_ADDRESS . ' &nbsp;|&nbsp; ' . COMPANY_PHONE . ' &nbsp;|&nbsp; ' . COMPANY_EMAIL . '
              </p>
              <p style="margin:10px 0 0 0;font-size:11px;color:#999;font-family:Arial,sans-serif;">
                &copy; ' . $year . ' ' . SITE_NAME . '. All rights reserved. This is an automated email, please do not reply directly unless needed.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>';
}

/** Small helper: renders a "label : value" details table used in several emails */
function email_detail_table(array $rows) {
    $html = '<table role="presentation" width="100%" style="border-collapse:collapse;margin:14px 0;font-size:14px;">';
    foreach ($rows as $label => $value) {
        if ($value === null || $value === '') continue;
        $html .= '<tr>
            <td style="padding:6px 10px 6px 0;color:#888;white-space:nowrap;vertical-align:top;width:150px;">' . htmlspecialchars($label) . '</td>
            <td style="padding:6px 0;color:#260058;font-weight:bold;vertical-align:top;">' . nl2br(htmlspecialchars($value)) . '</td>
        </tr>';
    }
    $html .= '</table>';
    return $html;
}

/* ══════════════════════════════════════════════════════════════
   1) ADMIN — new quotation request received (from booking.php)
   ══════════════════════════════════════════════════════════════ */
function tpl_admin_new_quotation(array $q) {
    $body = '<p>You have received a new quotation request through the website booking form.</p>'
        . email_detail_table([
            'Name'            => $q['full_name'],
            'Mobile'          => $q['mobile'],
            'Email'           => $q['email'],
            'Date From'       => $q['date_from'],
            'Date To'         => $q['date_to'],
            'Destination'     => $q['destination'],
            'Persons'         => $q['persons'],
            'Kids'            => $q['kids'],
            'Kids Age Group'  => $q['kids_age_group'],
            'Special Request' => $q['special_request'],
        ])
        . '<p>You can reply directly to this email to send the client a quotation. Once they\'re ready to pay, '
        . 'just share our payment page link with them: <a href="' . SITE_URL . SITE_BASE_PATH . '/payment/payment.php">'
        . SITE_URL . SITE_BASE_PATH . '/payment/payment.php</a></p>';

    return build_email_html('New Quotation Request', $body);
}

/* ══════════════════════════════════════════════════════════════
   2) CLIENT — confirmation that their quotation request was received
   ══════════════════════════════════════════════════════════════ */
function tpl_client_quotation_received(array $q) {
    $body = '<p>Hi ' . htmlspecialchars($q['full_name']) . ',</p>'
        . '<p>Thank you for reaching out to ' . SITE_NAME . '! We have successfully received your quotation request for your Sri Lanka trip. '
        . 'Our team is already reviewing your travel dates, destinations, and preferences.</p>'
        . '<p>You will receive a personalised quotation from us by email shortly, along with a secure payment link to confirm your booking.</p>'
        . email_detail_table([
            'Date From'       => $q['date_from'],
            'Date To'         => $q['date_to'],
            'Destination'     => $q['destination'],
            'Persons'         => $q['persons'],
        ])
        . '<p>In the meantime, feel free to explore more of what we offer on our website.</p>';

    return build_email_html('Your Quotation Request Was Received', $body, 'VISIT US', SITE_URL . SITE_BASE_PATH);
}

/* ══════════════════════════════════════════════════════════════
   3) CLIENT — payment successful
   ══════════════════════════════════════════════════════════════ */
function tpl_client_payment_success(array $person, array $payment) {
    $body = '<p>Hi ' . htmlspecialchars($person['name']) . ',</p>'
        . '<p><strong>Your payment was received successfully!</strong> Thank you for booking your Sri Lanka journey with ' . SITE_NAME . '.</p>'
        . email_detail_table([
            'Amount Paid'   => format_money($payment['amount'], $payment['currency']),
            'Reference'     => $payment['note'] ?? '',
            'Order No.'     => $payment['order_id'],
        ])
        . '<p>Our team will contact you shortly to confirm the final details of your itinerary and answer any questions you may have.</p>'
        . '<p>We can\'t wait to welcome you to Sri Lanka!</p>';

    return build_email_html('Payment Received — Thank You!', $body, 'VISIT US', SITE_URL . SITE_BASE_PATH);
}

/* ══════════════════════════════════════════════════════════════
   4) ADMIN — payment received
   ══════════════════════════════════════════════════════════════ */
function tpl_admin_payment_received(array $person, array $payment) {
    $body = '<p>A payment has just been completed through the website. Please contact the client as soon as possible.</p>'
        . email_detail_table([
            'Client Name'   => $person['name'],
            'Client Mobile' => $person['mobile'],
            'Client Email'  => $person['email'],
            'Amount Paid'   => format_money($payment['amount'], $payment['currency']),
            'Reference'     => $payment['note'] ?? '',
            'Order No.'     => $payment['order_id'],
            'PayHere Payment ID' => $payment['payhere_payment_id'],
        ]);

    return build_email_html('Payment Received', $body);
}

/* ══════════════════════════════════════════════════════════════
   5) ADMIN — new contact form message (about.php)
   ══════════════════════════════════════════════════════════════ */
function tpl_admin_new_contact(array $c) {
    $body = '<p>You have received a new message through the website contact form.</p>'
        . email_detail_table([
            'Name'    => trim($c['first_name'] . ' ' . $c['last_name']),
            'Mobile'  => $c['mobile'],
            'Email'   => $c['email'],
            'Subject' => $c['subject'],
            'Message' => $c['message'],
        ]);

    return build_email_html('New Contact Message', $body);
}

/* ══════════════════════════════════════════════════════════════
   6) CLIENT — auto-reply after submitting the contact form
   ══════════════════════════════════════════════════════════════ */
function tpl_client_contact_feedback(array $c) {
    $body = '<p>Hi ' . htmlspecialchars($c['first_name']) . ',</p>'
        . '<p>Thank you for reaching out to ' . SITE_NAME . '! We have successfully received your message and will get back to you as soon as possible.</p>'
        . '<p>In the meantime, stay connected with us on social media for the latest updates and travel inspiration.</p>';

    return build_email_html('We\'ve Received Your Message', $body, 'VISIT US', SITE_URL . SITE_BASE_PATH);
}
