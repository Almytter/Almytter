<?php
require "phpqrcode/qrlib.php";

// Get your computer's IP via 'ipconfig' in cmd
// Example: http://192.168.1.5/vc.html
$y = "https://almytter.github.io/Almytter/"; 

// 1. Tell the browser to expect an image
header('Content-Type: image/png');

// 2. Generate the QR code using the URL variable
QRcode::png($y, false, "m", 6, 3); 
?>
