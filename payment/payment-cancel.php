<?php
require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Cancelled - TimetoCeylon</title>
  <link rel="icon" type="image/png" href="../resources/img/logo_single.webp">
  <link rel="stylesheet" href="payment.css">
</head>
<body>
  <div class="pay-wrap">
    <div class="pay-card pay-card-center">
      <img class="pay-logo" src="../resources/img/logo_banner.webp" alt="TimetoCeylon">
      <div class="pay-status-icon pay-status-pending">&#33;</div>
      <h1>Payment Cancelled</h1>
      <p class="pay-sub">No worries - your payment was cancelled and you have not been charged. You can try again anytime using the payment link we sent you.</p>
      <a href="<?= htmlspecialchars(SITE_URL . SITE_BASE_PATH) ?>" class="pay-btn" style="display:inline-block;text-decoration:none;text-align:center;margin-top:10px;">Back to Website</a>
    </div>
  </div>
</body>
</html>
