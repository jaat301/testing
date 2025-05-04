<?php
$root   = 'C:/xampp/htdocs/xvwa';
$tmpTar = sys_get_temp_dir() . '/all_xvwa.tar';

try {
    $phar = new PharData($tmpTar);
    $phar->buildFromDirectory($root);
    echo base64_encode(file_get_contents($tmpTar));
    unlink($tmpTar);
} catch (Exception $e) {
    http_response_code(500);
    exit("PharData failed: " . $e->getMessage());
}
