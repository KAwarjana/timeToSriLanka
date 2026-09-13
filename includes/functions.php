<?php
/**
 * Shared small helper functions.
 * This whole system is stateless — nothing is ever written to disk or a database.
 * Data needed later (client name, amount, etc.) travels inside signed links/fields.
 */

function sanitize_input($data) {
    $data = trim((string) $data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function format_money($amount, $currency = 'LKR') {
    return $currency . ' ' . number_format((float) $amount, 2);
}

// Sends a JSON response and stops execution — used by the *-submit.php AJAX endpoints
function json_response($success, $message, $extra = []) {
    header('Content-Type: application/json');
    echo json_encode(array_merge(['success' => $success, 'message' => $message], $extra));
    exit;
}

/**
 * Encodes an array into a compact, URL-safe, tamper-proof string signed with
 * APP_SECRET_KEY. No database or file is used — the data lives entirely inside
 * the string itself. Use decode_signed_payload() to read it back safely.
 */
function encode_signed_payload(array $data) {
    $json = json_encode($data);
    $body = rtrim(strtr(base64_encode($json), '+/', '-_'), '=');
    $sig  = hash_hmac('sha256', $body, APP_SECRET_KEY);
    return $body . '.' . substr($sig, 0, 32); // short signature is enough here
}

/**
 * Decodes a payload produced by encode_signed_payload(). Returns null if the
 * signature is missing/invalid (i.e. the link was tampered with).
 */
function decode_signed_payload($token) {
    if (!is_string($token) || strpos($token, '.') === false) return null;

    [$body, $sig] = explode('.', $token, 2);
    $expected = substr(hash_hmac('sha256', $body, APP_SECRET_KEY), 0, 32);

    if (!hash_equals($expected, $sig)) return null;

    $json = base64_decode(strtr($body, '-_', '+/'));
    $data = json_decode($json, true);

    return is_array($data) ? $data : null;
}

/**
 * Character length that works even if the mbstring PHP extension isn't
 * installed (some local PHP setups don't have it enabled by default).
 */
function ttc_strlen($str) {
    return function_exists('mb_strlen') ? mb_strlen($str, 'UTF-8') : strlen($str);
}

/** Short unique-enough order id for PayHere — doesn't need to be looked up anywhere */
function generate_order_id() {
    return 'TTC' . date('ymd') . strtoupper(bin2hex(random_bytes(4)));
}

/**
 * Parses a "dd/mm/yyyy" string (the format booking.js sends) into a DateTime
 * at midnight, or null if it's missing/malformed/not a real calendar date.
 */
function ttc_parse_date($str) {
    if (!is_string($str) || !preg_match('/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/', trim($str), $m)) {
        return null;
    }
    [, $d, $mo, $y] = $m;
    if (!checkdate((int) $mo, (int) $d, (int) $y)) {
        return null;
    }
    $date = DateTime::createFromFormat('!d/m/Y', sprintf('%02d/%02d/%04d', $d, $mo, $y));
    return $date ?: null;
}

/**
 * Call this once, right at the top of any *-submit.php AJAX endpoint (after
 * requiring config.php). It guarantees the endpoint ALWAYS returns valid JSON,
 * even if a PHP fatal error happens — instead of a broken page that shows
 * "Something went wrong" because the JS couldn't parse the response.
 * When DEBUG_MODE is true, the real PHP error message is included so you can
 * see exactly what went wrong while testing locally.
 */
function ttc_register_json_error_handler() {
    register_shutdown_function(function () {
        $error = error_get_last();
        if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR], true)) {
            if (!headers_sent()) {
                header('Content-Type: application/json');
                http_response_code(500);
            }
            echo json_encode([
                'success' => false,
                'message' => defined('DEBUG_MODE') && DEBUG_MODE
                    ? 'Server error: ' . $error['message'] . ' (' . basename($error['file']) . ' line ' . $error['line'] . ')'
                    : 'Something went wrong on our server. Please try again shortly.',
            ]);
        }
    });
}
