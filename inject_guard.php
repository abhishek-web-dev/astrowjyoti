<?php
$baseDir = '/media/abhishekn/New Volume1/BKM/Astrojyoti/Frontend';

$directoriesToProtect = [
    '/Dashboard',
    '/Booking',
    '/Chat',
    '/Video'
];

$excludeFiles = [
    'header.php',
    'sidebar.php',
    'Astrologer-Profile.php'
];

$authGuardRequire = "<?php require_once __DIR__ . '/../auth_guard.php'; ?>\n";

foreach ($directoriesToProtect as $dir) {
    $fullPath = $baseDir . $dir;
    if (!is_dir($fullPath)) continue;

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($fullPath));
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $filename = $file->getFilename();
            if (in_array($filename, $excludeFiles)) continue;

            $content = file_get_contents($file->getPathname());
            
            // Avoid double injecting
            if (strpos($content, 'auth_guard.php') !== false) {
                continue;
            }

            // Check if file starts with <?php
            if (preg_match('/^\s*<\?php/i', $content)) {
                // Insert after the first <?php
                $content = preg_replace('/^\s*<\?php/i', "<?php\nrequire_once __DIR__ . '/../auth_guard.php';\n", $content, 1);
            } else {
                // Prepend to the top
                $content = $authGuardRequire . $content;
            }

            file_put_contents($file->getPathname(), $content);
            echo "Protected: " . $file->getPathname() . "\n";
        }
    }
}
echo "Done.\n";
?>
