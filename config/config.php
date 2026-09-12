<?php
/**
 * ══════════════════════════════════════════════════════════════
 *  TimetoCeylon — Central Configuration
 * ══════════════════════════════════════════════════════════════
 *  Fill in the TODO values below before going live.
 *  This file is included by every backend script — do not delete.
 * ══════════════════════════════════════════════════════════════
 */

// ── Site ────────────────────────────────────────────────────────
// TODO: set this to your real live domain (no trailing slash)
define('SITE_URL', 'https://timetoceylon.com');
define('SITE_NAME', 'TimetoCeylon');

// Public path (from domain root) to the timeToSriLanka folder.
// Leave as '' if this folder IS the domain root, otherwise e.g. '/timeToSriLanka'
define('SITE_BASE_PATH', '');

// Logo used inside emails (must be a publicly reachable URL)
define('SITE_LOGO_URL', SITE_URL . SITE_BASE_PATH . '/resources/img/logo_banner.webp');

// ── Company contact info (shown in emails) ─────────────────────
define('COMPANY_EMAIL', 'kawarjanagunasekara@gmail.com');   // owner / admin inbox — all notifications go here
define('COMPANY_PHONE', '+94 255 528 956');
define('COMPANY_ADDRESS', 'Colombo, Sri Lanka');

// ── Outgoing mail "From" address ───────────────────────────────
// IMPORTANT: this must be an address @ your own domain (e.g. kawarjanagunasekara@gmail.com)
// for PHP's mail() to be accepted by most mail servers / avoid spam folders.
define('MAIL_FROM_ADDRESS', 'kawarjanagunasekara@gmail.com');
define('MAIL_FROM_NAME', 'TimetoCeylon');

// ── Secret signing key ──────────────────────────────────────────
// Used to sign the payment link's hidden data (client name, amount, etc.) so
// it can travel safely through PayHere WITHOUT any database — nothing is
// ever stored on the server.
// TODO: change this to your own long random string (and never share it).
define('APP_SECRET_KEY', 'CHANGE_THIS_TO_A_LONG_RANDOM_SECRET_STRING_1234567890');

// ── PayHere payment gateway ─────────────────────────────────────
// TODO: fill these from your PayHere Merchant dashboard (Settings > Domains & Credentials)
define('PAYHERE_SANDBOX', true); // set to false when going live
define('PAYHERE_MERCHANT_ID', 'YOUR_PAYHERE_MERCHANT_ID');
define('PAYHERE_MERCHANT_SECRET', 'YOUR_PAYHERE_MERCHANT_SECRET');
define('PAYHERE_CURRENCY', 'LKR');

define('PAYHERE_CHECKOUT_URL', PAYHERE_SANDBOX
    ? 'https://sandbox.payhere.lk/pay/checkout'
    : 'https://www.payhere.lk/pay/checkout');

// ── Timezone ─────────────────────────────────────────────────────
date_default_timezone_set('Asia/Colombo');

// ── Debug mode ─────────────────────────────────────────────────
// While true, the booking/contact/payment endpoints will return the REAL
// PHP error message in the JSON response when something fails — very useful
// while testing on localhost.
// TODO: set this to false before going live (so real errors aren't exposed to visitors).
define('DEBUG_MODE', true);

// ── Error display ──────────────────────────────────────────────
// Kept OFF always: if PHP prints a warning/notice into the response body it
// breaks the JSON the booking/contact/payment forms expect (this is what
// causes a generic "Something went wrong" on the page). Real errors are
// instead caught and shown via DEBUG_MODE above, safely inside the JSON.
ini_set('display_errors', '0');
error_reporting(E_ALL);
