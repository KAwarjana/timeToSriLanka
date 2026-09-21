<?php
/**
 * PayHere calls this URL directly from their server after a payment attempt.
 * Must stay publicly reachable (no login) since PayHere itself posts to it.
 * Fully stateless: the client's name/email/mobile/amount travel back inside
 * custom_1 + custom_2 (set in payment.php) - nothing is looked up anywhere.
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/mailer.php';
require_once __DIR__ . '/../includes/email-templates.php';

$merchantId      = $_POST['merchant_id']      ?? '';
$orderId         = $_POST['order_id']         ?? '';
$payhereAmount   = $_POST['payhere_amount']   ?? '';
$payhereCurrency = $_POST['payhere_currency'] ?? '';
$statusCode      = $_POST['status_code']      ?? '';
$md5sig          = $_POST['md5sig']           ?? '';
$paymentId       = $_POST['payment_id']       ?? '';
$method          = $_POST['method']           ?? '';
$customToken     = ($_POST['custom_1'] ?? '') . ($_POST['custom_2'] ?? '');

if ($merchantId === '' || $orderId === '' || $md5sig === '') {
    http_response_code(400);
    exit('Missing parameters');
}

$localSig = strtoupper(md5(
    $merchantId . $orderId . $payhereAmount . $payhereCurrency . $statusCode .
    strtoupper(md5(PAYHERE_MERCHANT_SECRET))
));

if ($merchantId !== PAYHERE_MERCHANT_ID || $localSig !== $md5sig) {
    http_response_code(400);
    exit('Signature mismatch');
}

// status_code 2 = success (PayHere spec). Anything else = failed/pending - ignore.
if ($statusCode !== '2') {
    http_response_code(200);
    exit('OK (not a success status, ignored)');
}

$person = decode_signed_payload($customToken);

if (!$person || empty($person['email'])) {
    // Signature was valid but we couldn't read who this was for - nothing more we can do.
    http_response_code(200);
    exit('OK (could not decode client details)');
}

$payment = [
    'amount'             => $person['amount'] ?? $payhereAmount,
    'currency'           => $person['currency'] ?? $payhereCurrency,
    'note'               => $person['note'] ?? '',
    'order_id'           => $orderId,
    'payhere_payment_id' => $paymentId,
];

// Email - client: payment successful
send_mail(
    $person['email'],
    'Payment Received - Thank You! - ' . SITE_NAME,
    tpl_client_payment_success($person, $payment)
);

// Email - admin: payment + client details
send_mail(
    COMPANY_EMAIL,
    'Payment Received - ' . $person['name'],
    tpl_admin_payment_received($person, $payment)
);

http_response_code(200);
echo 'OK';
