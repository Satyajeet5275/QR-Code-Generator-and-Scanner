<html>
<head>
    <link rel="stylesheet" href="style1.css">
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
            <form action="decode1.php" method="POST">
              <div class="input_field" id="input_field">
                <img src="qr.png" style="height: 100px; width: 100px;">
                <div class="input-group mb-3" id="fileupload">
                    <input type="file" name="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>                  
              </div>
              </div>
          <button type="submit" class="btn2" id="btn2" style="margin-top: 50px;">Decode</button>
            </form>
        </div>
    </div>

<!-- Script -->
    <!-- <script type="text/javascript">
        document.getElementById("btn2").onclick = function () { 
                var inputdata=document.getElementById("inputGroupFile02");
                var s=inputdata.value;
                if(inputdata.files[0].name!="" && inputdata.files[0].name!=null){
                    document.cookie="filenm="+s;
                    window.location.href = "decode1.php";
                }
        
        };
    </script> -->
</body>
</html>