<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Facebook</title>
        <link rel="stylesheet" type="text/css" href="script.css">
        <script language="Javascript">
            function v_form()
            {
                var x=document.forms["form1"]["user"].value;
                var atpos=x.indexOf("@");
                var dotpos=x.lastIndexOf(".");
                if(atpos<1||dotpos<atpos+2||dotpos+2>=x.length)
                {
                    alert("not a valid email address");
                    return false;
                }
                var y=document.forms["form1"]["pswd"].value;
                if(y==null||y=="")
                {
                    alert("Enter password!");
                    return false;
                }
            }
        </script>
    </head>
    <body bgcolor="white">
        <div class="nik">
            <img  src="Photo/chutiya.svg">
        </div>
        <div class="login">
        <form name="form1" onsubmit="return v_form()" method="GET">
            <h4 align="center">
            Login in to Facebook
            </h4>
            <p>
            <input type="text" name="user" placeholder="Email address or phone number">
            <br><br>
            <input type="password" name="pswd" placeholder="Password">
            </p>
            <p>
            <input type="submit" name="log" value="Log in" action="www.facebook.com">
            </p>
            <p class="log">
            <a href="www.instagram.com"> Forgetten password? </a>
             or  
            <a href="www.google.com"> Sign up for Facebook</a>
            </p>
            <br>
            

        </form>
        </div>


    </body>
</html>
