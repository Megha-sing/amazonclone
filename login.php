<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="icon.png">
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Sign in</title>
        </head>
    <body>
        <div class="logo"></div>
        <div class="main">
        <div class="center">
            <h1>Sign in</h1>

            <form method="post">
                <label><b>Username</b></label>
                <div class="text">
                    <input type="text" required class="box" name=user_name>
                    
                </div>
                <label><b>Password</b></label>
                <div class="text">
                    <input type="password" required  class="box" name=user_password>
                    
                </div>
                <input type="submit" value="Login" class="button" name=login>
                <div class="cont">
                By continuing, you agree to Amazon's Conditions of Use and Privacy Notice.
                <hr>
                Buying for work?
Shop on Amazon Business</div>
            </div>
            </form>
            <form>
                
                <div class="new">
                    <h4>New to Amazon?</h4>
                    <a href=new.php target="_blank"><input type="button" value="Create New Account" class="button2"></a>
                </div>
            </form>
       
        </div>
    </body>
</html>

<?php 
if (isset($_POST['login'])){
    $user_name=$_POST['user_name'];
    $user_password=$_POST['user_password'];
    echo "<script>alert('Logged in ')</script>";

}
?>