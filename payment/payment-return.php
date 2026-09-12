<?php
/**
 * Friendly page shown after PayHere redirects the client back (browser redirect —
 * not authoritative). The real confirmation email is sent by payhere-notify.php
 * on the server side, so we just point the client to their inbox here.
 */
require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Status — TimetoCeylon</title>
  <link rel="icon" type="image/png" href="../resources/img/logo_single.webp">
  <link rel="stylesheet" href="payment.css">
</head>
<body>
  <div class="pay-wrap">
    <div class="pay-card pay-card-center">
      <img class="pay-logo" src="../resources/img/logo_banner.webp" alt="TimetoCeylon">
      <div class="pay-status-icon pay-status-success">&#10003;</div>
      <h1>Thank You!</h1>
      <p class="pay-sub">We're confirming your payment with PayHere. You'll receive a confirmation email at your address shortly, and our team will be in touch to finalise your trip.</p>
      <a href="<?= htmlspecialchars(SITE_URL . SITE_BASE_PATH) ?>" class="pay-btn" style="display:inline-block;text-decoration:none;text-align:center;margin-top:10px;">Back to Website</a>
    </div>
  </div>
</body>
</html>
