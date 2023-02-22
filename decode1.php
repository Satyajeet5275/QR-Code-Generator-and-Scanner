<html>
<head>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>QR Generator</title>
</head>
<body>
    <div class="main">
        <div class="mid">
            <span class="title" style="font-size:40px">QR Decoder</span>
            <br>
              <div id="parent">
              <div class="input_field" id="input_field">
                <img src="qr.png" style="height: 100px; width: 100px;" class="img1">
              </div>
              <h5 id="txt">This is the Url</h5>
              </div>
        </div>
    </div>
</body>
<?php 
    $i=$_POST['file'];

    print_r($i);

    require("vendor/autoload.php");

    $qrcode=new Zxing\QrReader($i);

    $text=$qrcode->text();

    if(filter_var($text,FILTER_VALIDATE_URL))
    {
    echo "<a href=\"$text\">$text</a>";

    echo "<script type='text/javascript' language='Javascript'>
    var t=document.getElementById('txt');
    document.getElementById('txt').innerHTML = '$text';
    window.open('$text')
    ;</script>";
    }
    else{
        $arr=explode('^',$text);
        $str=$arr[0]."<br>".$arr[1]."<br>".$arr[2]."<br>".$arr[3]."<br>".$arr[4];
        echo "<script type='text/javascript' language='Javascript'>
    var t=document.getElementById('txt');
    document.getElementById('txt').innerHTML = '$str';
    ;</script>";

    }
?>
</html>