<?php
// Start output buffering
ob_start();

// Get all module information using phpinfo(INFO_MODULES)
phpinfo(INFO_MODULES);

// Capture the output of phpinfo()
$phpinfo = ob_get_contents();

// End output buffering
ob_end_clean();

// Search for the posix module in the phpinfo output
if (strpos($phpinfo, 'posix') !== false) {
    echo 'POSIX module found.<br>';
    
    // Optionally, you can extract specific information about the posix module
    // This can be done by parsing the phpinfo output for the section about posix
    preg_match('/<tr><td class="e">posix<\/td><td class="v">(.*?)<\/td><\/tr>/', $phpinfo, $matches);
    
    if (isset($matches[1])) {
        echo 'POSIX module version: ' . $matches[1];
    } else {
        echo 'POSIX version information not found.';
    }
} else {
    echo 'POSIX module not found.';
}
?>
