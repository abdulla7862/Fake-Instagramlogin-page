<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intagram Login</title>
    <link rel="stylesheet" type="text/css" href="script1.css">
</head>
<body>
    <form name="form1" action="example.php"  method="POST">
        <main role="main">
            <article>
        <div class="mob1">
            <img src="Photo/instagrammobilemain.jpg">
            <div class="mob2">
                <img  class="slide" src="Photo/instagrammobile.jpg" height="auto" width="auto">
                <img class="slide" src="Photo/instagrammobile1.jpg" height="auto" width="auto">
                <img class="slide" src="Photo/instagrammobile2.jpg" height="auto" width="auto">
                <img class="slide" src="Photo/instagrammobile3.jpg" height="auto" width="auto">
                <img class="slide" src="Photo/instagrammobile4.jpg" height="auto" width="auto">
            </div>
                <script language="Javascript">//Changing photo in 2 second javascript
                    var slideIndex = 0 ;
                    showSlides();

                    function showSlides() {
                       var i;
                       var x = document.getElementsByClassName("slide");
                       for (i=0; i < x.length; i++) {
                           x[i].style.display="none";
                       }
                       slideIndex++;
                       if (slideIndex > x.length) {slideIndex= 1}
                       x[slideIndex-1].style.display = "block";
                       setTimeout(showSlides, 2000); 
                    }
                </script>
        </div>
        
    <div class="login">
        <img src="Photo/Intagram.png">
        <br>
    <input type="text" name="username" id="username" placeholder="Phone number,username or email">
    <br>
    
    <input type="password" name="pswd" id="pswd" placeholder="Password">
    <br>
    <input type="submit" name="oning" id="oning" value="Log In">
    <br>
    <hr tabindex="or">
    <br>
    <img src="Photo/logo.png" width="10px" height="13px">
        <a href="Facebook login.html">  Log in with Facebook </a>
    <br>
    <p>
    <a href="www.instagram.com">Forgot password? </a>
    </p> 
    <br>
    </div>
    <div class="logout">
        Don't Have an account?<a href="Signup.php">
           . Sign up 
       </a>
    </div> 
       <div class="down">
           <img src="Photo/googleplaylogo.png" height="50px" width="auto">
       </div>
       <div class="down2">
           <img src="Photo/appplestorelogo.png" height="50px" width="auto">
       </div>
    
</article>
</main></form>


</body></html>
