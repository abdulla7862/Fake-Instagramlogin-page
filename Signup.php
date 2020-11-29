<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intagram Signup </title>
    <link rel="stylesheet" type="text/css" href="script2.css">
</head>
<body>
    <form name="form1" action="signupinfo.php" method="POST">
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
        Sign up to see photos and videos <br>
        from your friends.
        <br>
        <br>
        <a class="tiktok" href="Facebook.php">
        <img src="Photo/logo.png" width="10px" height="13px"> 
        Log In with Facebook </a>
      <br>
      <br>
      <hr tabindex="or">
      <br>
    <input type="text" name="mobemail" id="mobemail" placeholder="Phone number or email">
    <input type="text" name="fullname" id="fullname" placeholder="Full Name">
    <input type="text" name="username" id="username" placeholder="username">
    <br>
    
    <input type="password" name="pswd" id="pswd" placeholder="Password">
    <br>
    <input type="submit" name="oning" id="oning" value="Log In">
  
    <h6>
    By signing up you agree to out <b>Terms, Data Policy</b> and <b>Cookies Policy</b>
    </h6> <br>
    </div>
    <div class="logout">
        Have an account?<a class="aco" href="Instagram.php">
           . Log in
       </a>
    </div> 
       <div class="down">
           <img src="Photo/googleplaylogo.png" height="50px" width="auto">
       </div>
       <div class="down2">
           <img src="Photo/appplestorelogo.png" height="50px" width="auto">
       </div>
    
</article>
</main> 
</form>
</body>
</html>
