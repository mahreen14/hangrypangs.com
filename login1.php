<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form </title>
    <link rel="stylesheet" href="STYLE.CSS"> 
</head>
<body>
     <!-- contact section start -->
     <div class="login">
        <div class="max-width">
            <div class="logo"><a href="index.php">HANGRY<span>PANGS</span></a></div>
            <h1 class="title">LOGIN</h1>
            <div class="loginform">
                <form action="#" method="post" autocomplete="off">
                        <div class="fields">
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" required autocomplete="off">
                            </div>
                            <div class="field PW">
                                <input type="password" placeholder="password" name="password" required autocomplete="off">
                            </div>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="login" value="Login">Login</button>
                        </div>
                        <h5> Don't have an account? <a href="signup.php" > Signup</a></h5>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include("connection.php");

if(isset($_POST['login']))
{
   $email = $_POST['email'];
   $password = $_POST['password'];

$query= "select * from form where email= '$email' && password='$password' ";
$data = mysqli_query($connection,$query);

$total= mysqli_num_rows($data);


if($total == 1)
{
  header('location:mainpage.php');
}
else 
{
    echo "<script>alert('Invalid Data')</script>";
}
}
?>