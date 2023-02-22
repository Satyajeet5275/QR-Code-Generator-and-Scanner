<?php

//load the ar library
include 'phpqrcode/qrlib.php';

//data to be stored in qr
$text = "https://satyajeet5275.github.io/Satyajeet/";
// $text = "https://gpmiraj.ac.in/";
  
//file path
$file = "qr1.png";
  
//other parameters
$ecc = 'H';
$pixel_size = 12;
$frame_size = 2;
  
// Generates QR Code and Save as PNG
//QRcode::png($text, $file_path, $error_correction, $pixel_size, $frame_size);
QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
  
// Displaying the stored QR code
echo "<div><img src='".$file."'></div>";

?>