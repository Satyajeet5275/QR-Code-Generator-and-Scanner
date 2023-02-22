<?php 
    require("vendor/autoload.php");

    $qrcode=new Zxing\QrReader("qr1.png");

    $text=$qrcode->text();

    echo "<a href=\"$text\">$text</a>";

    echo "<script type='text/javascript' language='Javascript'>window.open('$text');</script>";
// header("location: DemoDecoder.php");
?>