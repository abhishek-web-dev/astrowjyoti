<?php
// router.php
// Mimics Vite's dev server behavior and clean URL structure for the PHP built-in server.

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// 1. Serve the compiled Tailwind CSS instead of the raw /src/style.css
if ($path === '/src/style.css') {
    header("Content-Type: text/css");
    readfile(__DIR__ . '/style.css');
    return true;
}

// 2. Intercept /src/main.js to prevent the browser from crashing on import
if ($path === '/src/main.js') {
    $mainJs = file_get_contents(__DIR__ . '/src/main.js');
    $mainJs = preg_replace('/import\s+[\'"]\.\/style\.css[\'"];?/', '', $mainJs);
    $injectCss = "
    (function() {
        if (!document.querySelector('link[href=\"/src/style.css\"]')) {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = '/src/style.css';
            document.head.appendChild(link);
        }
    })();
    ";
    header("Content-Type: application/javascript");
    echo $injectCss . "\n" . $mainJs;
    return true;
}

// 3. Check if the file exists in the /public directory
$publicPath = __DIR__ . '/public' . $path;
if ($path !== '/' && file_exists($publicPath) && !is_dir($publicPath)) {
    $extension = pathinfo($publicPath, PATHINFO_EXTENSION);
    $mime = 'text/plain';
    switch (strtolower($extension)) {
        case 'css': $mime = 'text/css'; break;
        case 'js': $mime = 'application/javascript'; break;
        case 'png': $mime = 'image/png'; break;
        case 'jpg':
        case 'jpeg': $mime = 'image/jpeg'; break;
        case 'svg': $mime = 'image/svg+xml'; break;
        case 'mp4': $mime = 'video/mp4'; break;
        case 'gif': $mime = 'image/gif'; break;
        case 'json': $mime = 'application/json'; break;
        case 'woff': $mime = 'font/woff'; break;
        case 'woff2': $mime = 'font/woff2'; break;
        case 'ttf': $mime = 'font/ttf'; break;
    }
    header("Content-Type: $mime");
    readfile($publicPath);
    return true;
}

// 4. Redirect direct .php requests to clean URLs
if (preg_match('/\.php$/', $path) && $path !== '/router.php') {
    $cleanUrl = preg_replace('/\.php$/', '', $path);
    $qs = $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '';
    header("Location: $cleanUrl$qs", true, 301);
    exit;
}

// 5. Resolve clean URLs (e.g. /Consultations/Talk-to-Astrologer -> .php)
$cleanPath = __DIR__ . $path . '.php';
if ($path !== '/' && file_exists($cleanPath) && !is_dir($cleanPath)) {
    include $cleanPath;
    return true;
}

// 6. Root path
if ($path === '/') {
    include __DIR__ . '/index.php';
    return true;
}

return false;
