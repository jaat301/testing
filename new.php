<?php
$extensions = get_loaded_extensions();
if (in_array('posix', $extensions)) {
    echo 'POSIX extension is loaded.';
} else {
    echo 'POSIX extension is not loaded.';
}
?>
