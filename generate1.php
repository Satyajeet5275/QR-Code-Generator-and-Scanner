<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>QR Code</title>
</head>
<body>
<div class="main">
        <div class="mid" id="mid">
            <span class="title"style="font-size:40px">QR Generator</span>
            <br>
            <img src="qrcode.png" id="img1" class="img1" ></img>  
            <br>
        <a class="btn2" id="btn2" href="qrcode.png" download="qrcode.png"><i class="material-icons" ><span class="material-icons-outlined">
file_download</span></i> Download</a>
        <!-- <button class="btn3" id="btn3" ><i class="material-icons" >email</i> Send Mail</button> -->
        </div>
</div>
</body>

<script>
        var str=localStorage.getItem('info');
        
        document.cookie="key="+str+"; expires="+new Date(2022,12,31).toGMTString();
        var c=document.cookie;

</script>

<?php
//load the ar library
include 'phpqrcode/qrlib.php';

//data to be stored in qr
$text=$_COOKIE['key'];
// $text = "https://satyajeet5275.github.io/Satyajeet/";
// $text = "https://gpmiraj.ac.in/";
//file path
$file = "qrcode.png";
  
//other parameters
$ecc = 'H';
$pixel_size = 5;
$frame_size = 1;
  
if(file_exists($file))
{
        unlink($file);
        echo "Deleted";
}
// Generates QR Code and Save as PNG
//QRcode::png($text, $file_path, $error_correction, $pixel_size, $frame_size);
QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
// Displaying the stored QR code
// echo "<div><img src='".$file."'></div>";
header("Location: https://free-qr-generator.000webhostapp.com/generate1.php");


?>
</html>