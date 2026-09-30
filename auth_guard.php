<?php
// Secure session configuration matching backend
session_set_cookie_params([
    'lifetime' => 86400,
    'path' => '/',
    'domain' => '',
    'secure' => false,
    'httponly' => true,
    'samesite' => 'Lax'
]);

// Avoid starting session if already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check authentication
if (!isset($_SESSION['user_id'])) {
    // Determine requested URL for potential redirect
    $redirect_url = urlencode($_SERVER['REQUEST_URI']);
    
    // Add no-cache headers to ensure back-button security
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    // Redirect to login
    header("Location: /Auth/Login?redirect=" . $redirect_url);
    exit();
}

// Ensure logged-in pages aren't cached either
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
