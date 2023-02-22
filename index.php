<html>
    <head>
        <link rel="stylesheet" href="style2.css">
        <title>QR World</title>
    </head>
    <body>
       <div class="main">
            <div class="mid">
                <span class="title" style="color: #3498db">QR World</span>
                <br>
                <!-- <h3>Keep claim and scan on</h3> -->
                <h3>Turn any piece of text into a QR code</h3>
                <br>
                <button class="btn" id="btn">QR Code Generator</button>
                <br>
                <button class="btn1" id="btn1" >QR Code Decoder</button>
            </div>
        </div>
    </body>
    <script type="text/javascript">
    document.getElementById("btn").onclick = function () {
        location.href = "generate.php";
    };
    document.getElementById("btn1").onclick = function () {
        location.href = "decode.php";
    };
</script>
</html>