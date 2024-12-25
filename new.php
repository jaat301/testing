<?php
ob_start(); // Start output buffering
phpinfo(INFO_MODULES); // Get all module information
$phpinfo = ob_get_contents(); // Capture the output
ob_end_clean(); // End buffering

// Search for the posix module version in the captured output
if (strpos($phpinfo, 'posix') !== false) {
    echo 'POSIX module found.';
} else {
    echo 'POSIX module not found.';
}
?>
