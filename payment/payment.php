<?php
/**
 * Public "Make a Payment" page — fully self-serve, no admin tool involved.
 * The owner personally emails the client a quotation (from his own inbox) and
 * tells them the amount to pay and shares this page's link. The client fills
 * in their own details and amount here and pays via PayHere.
 * Nothing is stored anywhere — client details only travel through this one
 * request and through PayHere's custom fields back to the notify handler.
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';

$error = '';
$payhereFields = null;

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $name     = sanitize_input($_POST['name'] ?? '');
    $email    = sanitize_input($_POST['email'] ?? '');
    $mobile   = sanitize_input($_POST['mobile'] ?? '');
    $amount   = (float) ($_POST['amount'] ?? 0);
    $currency = sanitize_input($_POST['currency'] ?? PAYHERE_CURRENCY);
    $note     = sanitize_input($_POST['note'] ?? '');

    if ($name === '') {
        $error = 'Please enter your name.';
    } elseif ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif ($amount <= 0) {
        $error = 'Please enter a valid amount to pay.';
    } else {
        $orderId = generate_order_id();
        $amountFormatted = number_format($amount, 2, '.', '');

        $hash = strtoupper(md5(
            PAYHERE_MERCHANT_ID . $orderId . $amountFormatted . $currency .
            strtoupper(md5(PAYHERE_MERCHANT_SECRET))
        ));

        $nameParts = explode(' ', trim($name), 2);
        $firstName = $nameParts[0] ?? $name;
        $lastName  = $nameParts[1] ?? '.';

        // Everything the notify handler needs later is packed into custom_1/custom_2
        // (PayHere echoes these back verbatim) — no database lookup needed.
        $customToken = encode_signed_payload([
            'name'     => $name,
            'email'    => $email,
            'mobile'   => $mobile,
            'amount'   => $amount,
            'currency' => $currency,
            'note'     => $note,
            'order_id' => $orderId,
        ]);

        $payhereFields = [
            'merchant_id'  => PAYHERE_MERCHANT_ID,
            'return_url'   => SITE_URL . SITE_BASE_PATH . '/payment/payment-return.php',
            'cancel_url'   => SITE_URL . SITE_BASE_PATH . '/payment/payment-cancel.php',
            'notify_url'   => SITE_URL . SITE_BASE_PATH . '/payment/payhere-notify.php',
            'order_id'     => $orderId,
            'items'        => SITE_NAME . ' — Sri Lanka Tour Payment' . ($note !== '' ? ' (' . $note . ')' : ''),
            'currency'     => $currency,
            'amount'       => $amountFormatted,
            'first_name'   => $firstName,
            'last_name'    => $lastName,
            'email'        => $email,
            'phone'        => $mobile,
            'address'      => '-',
            'city'         => '-',
            'country'      => 'Sri Lanka',
            'custom_1'     => substr($customToken, 0, 100),
            'custom_2'     => substr($customToken, 100),
            'hash'         => $hash,
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Make a Payment — TimetoCeylon</title>
  <link rel="icon" type="image/png" href="../resources/img/logo_single.webp">
  <link rel="stylesheet" href="payment.css">
</head>
<body>

  <div class="pay-wrap">
    <div class="pay-card">
      <img class="pay-logo" src="../resources/img/logo_banner.webp" alt="TimetoCeylon">

      <h1>Make a Payment</h1>
      <p class="pay-sub">If our team has already quoted you a price by email, enter your details and the amount below to pay securely via PayHere.</p>

      <?php if ($error): ?><div class="pay-error"><?= htmlspecialchars($error) ?></div><?php endif; ?>

      <?php if ($payhereFields): ?>
        <!-- auto-submits to PayHere -->
        <form id="payhereForm" method="POST" action="<?= htmlspecialchars(PAYHERE_CHECKOUT_URL) ?>">
          <?php foreach ($payhereFields as $key => $value): ?>
            <input type="hidden" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
          <?php endforeach; ?>
        </form>
        <p class="pay-redirect-msg">Redirecting you to our secure payment page…</p>
        <script>document.getElementById('payhereForm').submit();</script>
      <?php else: ?>
        <form method="POST" action="payment.php" class="pay-form">
          <div class="pay-form-box">
            <label>Your Name</label>
            <input type="text" name="name" required minlength="2" maxlength="100" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
          </div>
          <div class="pay-form-box">
            <label>Your Email</label>
            <input type="email" name="email" required maxlength="150" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
          </div>
          <div class="pay-form-box">
            <label>Mobile Number</label>
            <input type="text" name="mobile" maxlength="20" value="<?= htmlspecialchars($_POST['mobile'] ?? '') ?>">
          </div>
          <div class="pay-form-row">
            <div class="pay-form-box">
              <label>Amount to Pay</label>
              <input type="number" step="0.01" min="0" name="amount" required value="<?= htmlspecialchars($_POST['amount'] ?? '') ?>">
            </div>
            <div class="pay-form-box">
              <label>Currency</label>
              <input type="text" name="currency" value="<?= htmlspecialchars($_POST['currency'] ?? PAYHERE_CURRENCY) ?>" required>
            </div>
          </div>
          <div class="pay-form-box">
            <label>Reference / What is this payment for? (optional)</label>
            <input type="text" name="note" maxlength="150" placeholder="e.g. 30% Advance — Ella &amp; Kandy Trip" value="<?= htmlspecialchars($_POST['note'] ?? '') ?>">
          </div>
          <button type="submit" class="pay-btn">Proceed to Payment</button>
        </form>
      <?php endif; ?>

      <p class="pay-note">Payments are securely processed through PayHere. We do not store your card details.</p>
    </div>
  </div>

</body>
</html>
