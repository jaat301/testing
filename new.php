<?php
$root = 'C:/xampp/htdocs/xvwa';
$tmp  = sys_get_temp_dir() . '/all_xvwa.zip';

$zip = new ZipArchive();
if ($zip->open($tmp, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
    http_response_code(500);
    exit("ZIP creation failed\n");
}

$it = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($it as $file) {
    // add only files, skip directories
    $filePath     = $file->getRealPath();
    $relativePath = substr($filePath, strlen($root) + 1);
    $zip->addFile($filePath, $relativePath);
}

$zip->close();

// emit base64 of the ZIP and clean up
echo base64_encode(file_get_contents($tmp));
unlink($tmp);
