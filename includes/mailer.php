<?php
/**
 * Plain PHP mail() sender — same approach as the site's existing contact form
 * (no SMTP, no app passwords). Requires the hosting server to have a working
 * mail() / sendmail setup, which is standard on cPanel/DreamHost-style shared hosting.
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

    // The 5th parameter sets the envelope sender (Return-Path) to match the From
    // address. Several hosts, including DreamHost, use this for SPF alignment —
    // without it, mail TO providers like Gmail is more likely to land in spam.
    $ok = @mail($to, $subject, $htmlBody, $headers, '-f' . MAIL_FROM_ADDRESS);

    // Keep a lightweight in-memory record for this one request only (nothing is
    // saved anywhere) so DEBUG_MODE can show exactly what mail() reported.
    if (!isset($GLOBALS['ttc_mail_log'])) {
        $GLOBALS['ttc_mail_log'] = [];
    }
    $lastError = error_get_last();
    $GLOBALS['ttc_mail_log'][] = [
        'to'      => $to,
        'result'  => $ok,
        'php_msg' => ($lastError && stripos($lastError['message'], 'mail') !== false) ? $lastError['message'] : null,
    ];

    return $ok;
}

/**
 * Returns a short human-readable summary of every send_mail() call made so far
 * in this request — only used when DEBUG_MODE is on, to help diagnose why an
 * email didn't arrive (e.g. on a fresh hosting account).
 */
function ttc_mail_debug_summary() {
    $lines = [];

    // The #1 cause of "mail() returned true but nothing arrives": sending FROM a
    // free email provider (Gmail/Yahoo/Outlook) through a different server. The
    // receiving server sees this as spoofing and silently drops it — mail() still
    // reports success because the LOCAL handoff worked, the rejection happens later.
    $fromDomain = strtolower(substr(strrchr(MAIL_FROM_ADDRESS, '@'), 1));
    $freeProviders = ['gmail.com', 'yahoo.com', 'outlook.com', 'hotmail.com', 'live.com', 'icloud.com'];
    if (in_array($fromDomain, $freeProviders, true)) {
        $lines[] = '⚠ MAIL_FROM_ADDRESS (' . MAIL_FROM_ADDRESS . ') is a ' . $fromDomain
            . ' address — sending FROM a free email provider through your hosting server will be '
            . 'silently rejected by ' . $fromDomain . "'s spam filters. Change MAIL_FROM_ADDRESS in "
            . 'config.php to a real mailbox on your OWN hosting domain (create it in your DreamHost '
            . 'panel first, e.g. info@yourdomain.com). COMPANY_EMAIL (where you receive mail) can stay Gmail.';
    }

    if (empty($GLOBALS['ttc_mail_log'])) {
        $lines[] = 'No emails were attempted.';
        return implode(' ', $lines);
    }
    foreach ($GLOBALS['ttc_mail_log'] as $entry) {
        $lines[] = 'to ' . $entry['to'] . ': ' . ($entry['result'] ? 'mail() returned true' : 'mail() returned FALSE')
            . ($entry['php_msg'] ? ' — PHP said: ' . $entry['php_msg'] : '');
    }
    return implode(' | ', $lines);
}
