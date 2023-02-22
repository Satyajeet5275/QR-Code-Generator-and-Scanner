<html>
<head>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>QR Generator</title>
</head>
<body>
    <div class="main">
        <div class="mid">
            <span class="title" id="header" style="font-size:40px">QR Generator</span>
            <br>

            <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="position: relative; margin: 40px 0;">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">Website</label>
              
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">Contact</label>
              </div>

              <div id="parent">
              <div class="input_field" id="input_field">
                <input type="text" placeholder="Web URL" name="url" class="input" id="input">
              </div>
              </div>
          <button class="btn2" id="btn2">Generate</button>
        </div>
    </div>

<!-- Script -->>
    <script type="text/javascript">

        var parent=document.getElementById("parent");

        document.getElementById("btnradio1").onclick = function () {

            var input_field=document.getElementById("input_field");
            input_field.remove();

            var input_field=document=document.createElement('div');
            input_field.setAttribute('id','input_field');
            input_field.setAttribute('class','input_field');

            var n1 = document.createElement('input');
            n1.setAttribute('type','text');
            n1.setAttribute('class','input');
            n1.setAttribute('name','url');
            n1.setAttribute('id','input');
            n1.setAttribute('siz',50);
            n1.setAttribute('placeholder','Web URL');
            input_field.appendChild(n1);

            parent.appendChild(input_field);
            
        };

        document.getElementById("btnradio2").onclick = function () {

            var input_field=document.getElementById("input_field");
            input_field.remove();

            var input_field=document=document.createElement('div');
            input_field.setAttribute('id','input_field');
            input_field.setAttribute('class','input_field');

            var n1 = document.createElement('input');
            n1.setAttribute('type','text');
            n1.setAttribute('id','input');
            n1.setAttribute('name','name');
            n1.setAttribute('class','input');
            n1.setAttribute('siz',50);
            n1.setAttribute('placeholder','Name');
            input_field.appendChild(n1);

            // var n2 = document.createElement('input');
            // n2.setAttribute('type','number');
            // n2.setAttribute('id','input');
            // n2.setAttribute('class','input');
            // n2.setAttribute('name','mobile');
            // n2.setAttribute('siz',50);
            // n2.setAttribute('placeholder','Mobile No');
            // input_field.appendChild(n2);

            var n3 = document.createElement('input');
            n3.setAttribute('type','email');
            n3.setAttribute('id','input');
            n3.setAttribute('class','input');
            n3.setAttribute('siz',50);
            n3.setAttribute('name','email');
            n3.setAttribute('placeholder','Email');
            input_field.appendChild(n3);

            var n4 = document.createElement('input');
            n4.setAttribute('type','text');
            n4.setAttribute('id','input');
            n4.setAttribute('class','input');
            n4.setAttribute('siz',50);
            n4.setAttribute('name','address');
            n4.setAttribute('placeholder','Address');
            input_field.appendChild(n4);

            var n5 = document.createElement('input');
            n5.setAttribute('type','text');
            n5.setAttribute('id','input');
            n5.setAttribute('class','input');
            n5.setAttribute('siz',50);
            n5.setAttribute('name','company');
            n5.setAttribute('placeholder','Company Name');
            input_field.appendChild(n5);

            var n6 = document.createElement('input');
            n6.setAttribute('type','text');
            n6.setAttribute('id','input');
            n6.setAttribute('class','input');
            n6.setAttribute('siz',50);
            n6.setAttribute('name','job');
            n6.setAttribute('placeholder','Job Title');
            input_field.appendChild(n6);

            parent.appendChild(input_field);

        };
        
        document.getElementById("btn2").onclick = function () {
            if(document.getElementById("btnradio1").checked)
            {
                var url=document.getElementsByName("url");
                var str=url[0].value;
            }
            else
            {
                var name=document.getElementsByName("name");
                // var mobile=document.getElementsByName("mobile");
                var email=document.getElementsByName("email");
                var address=document.getElementsByName("address");
                var company=document.getElementsByName("company");
                var job=document.getElementsByName("job");

                if(name[0].value!=""  && email[0].value!="" && address[0].value!="")
                {
                // var str="Name : "+name[0].value+" Mobile No : "+mobile[0].value+" Email : "+email[0].value+" Address : "+address[0].value;
                var str="Name : "+name[0].value+"^Email : "+email[0].value+"^Address : "+address[0].value+"^Company : "+company[0].value+"^Job Title : "+job[0].value;
                }
                else
                {
                    str=""
                }
            }
            if(str!="")
            {
            localStorage.setItem('info',str);
            location.href = "generate1.php";
            }
            else
            {
                alert("Please fill all fields properly !");
            }
        };
    </script>
</body>
</html>