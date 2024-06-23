<?php 
include("connection.php");?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="icon.png">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>New Account</title>
    </head>
    <body>
    <div class="logo"></div>
        <div class="main">
        <div class="center">
        <h1>Create Account</h1>
        <form action="" method="post">
                <label><b>Your Name</b></label>
                <div class="text">
                    <input type="text" required class="box"name="user_name">
                    
                </div>
                <label><b>Phone Number</b></label>
                <div class="text">
                    <input type="text" required class="box" name="user_phone">
                </div>
                <label><b>Password</b></label>
                <div class="text">
                    <input type="password" required  class="box" name="user_password">
                    Passwords must be at least 6 characters.
                </div>
                
                <input type="submit" value="Create Account" class="button" name="create">
                <div class="cont">
                By continuing, you agree to Amazon's Conditions of Use and Privacy Notice.
                <hr>
                Buying for work?
Shop on Amazon Business</div>
            </div>
            </form>
            
    </body>
</html>

<?php
if (isset($_POST['create'])){
    $user_name=$_POST['user_name'];
    $user_phone=$_POST['user_phone'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);

    $select_query= "select * from login where username='$user_name' ";
    $result=mysqli_query($conn,$select_query);
    $rows_count=mysqli_num_rows($result);
if ($rows_count>0){
    echo "<script>alert('username already exists')</script>";
}
else{    $insert_query="INSERT INTO login (username , phonenumber, password) VALUES ('$user_name', '$user_phone','$hash_password')";
    $sql_execute=mysqli_query($conn,$insert_query);
    if ($sql_execute){
        echo "<script>alert('Account Created')</script>";
    }else{
        die(mysqli_error($conn));
    }

}

}

?>