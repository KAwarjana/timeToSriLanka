<?php
/**
 * Plain PHP mail() sender — same approach as the site's existing contact form
 * (no SMTP, no app passwords). Requires the hosting server to have a working
 * mail() / sendmail setup, which is standard on cPanel-style shared hosting.
 */

/**
 * @param string $to        recipient email
 * @param string $subject   email subject
 * @param string $htmlBody  full HTML body (use build_email_html() to generate it)
 * @param string|null $replyTo  optional Reply-To address (e.g. the client's email, for admin notifications)
 * @return bool
 */
function send_mail($to, $subject, $htmlBody, $replyTo = null) {
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' . MAIL_FROM_NAME . ' <' . MAIL_FROM_ADDRESS . '>' . "\r\n";
    if ($replyTo) {
        $headers .= 'Reply-To: ' . $replyTo . "\r\n";
    }

    return @mail($to, $subject, $htmlBody, $headers);
}
