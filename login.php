<?php session_start(); 
if (isset($_SESSION['user_id']))
{
    header("Location: profile.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="Forms.css" type="text/css" rel="stylesheet">
        <link href="icon.png" rel="icon">
        <title>Log In</title>
    </head>
    <body>
        <div class="page-container">
            <div class="headbar"id="top">
                <br>
                <a href="home.php">
                <img id="logo" src="juicepaletteLogo.png" width="25%">
                </a>
            </div>
            
            <div class="forms"> 
            <form action="signin.php" method="post">
                <fieldset>
                    <h1>Login</h1>
                    <p><input type="email" placeholder="Email" size="30" name="email"></p>
                    <p><input type="password" placeholder="Password" size="30" id="pass" name="password"></p>
                    <label for="ShowPassword"><input type="checkbox" id="ShowPassword" onclick="show()">Show Password</label>
                    <div class="centreButton">
                        <button type="submit" id="login" name="login" class="submitButtons">Login</button>
                    </div>
                    <P>Don't have an account? <a href="signup.html">Sign up</a></P>
                </fieldset>
            </form>
        </div>
        </div>
        <script>
            var ShowPassword =document.getElementById("ShowPassword");
            var pass =document.getElementById("pass");
            function show(){
          if(ShowPassword.checked){
            pass.type="text";
          }else pass.type="password";
        }
        </script>   
    </body>
</html>