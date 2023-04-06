<?php include("connection.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="signup" >
        <div class="max-width">
        <div class="logo"><a href="index.php">HANGRY<span>PANGS</span></a></div>
        <h1 class="title"> Signup </h1>
            <div class="sform">
            <form action="signup.php" method="post">
                <div class="fields">
                <div class="field fname"> 
                        <input type="name" placeholder="First Name" name="fname" required> 
                    </div>
                    <div class="field lname"> 
                        <input type="name" placeholder="Last Name" name="lname" required> 
                    </div>
                     <div class="field Password"> 
                        <input type="Password" placeholder="Password" name="password" required> 
                    </div>
                    <div class="field Password"> 
                        <input type="Password" placeholder=" Confirm Password" name=" conpassword" required> 
                    </div>
                    <div class="field email"> 
                        <input type="Email" placeholder="Email Address" name="email" required> 
                    </div>
                    <div class="field number"> 
                        <input type="mobile number " placeholder="Mobile Number" name="mobnumber" required> 
                    </div>
                    <div class="button-area">
                            <button type="submit" value="register" name="register" class="btn">SignUp</button>
                        </div>
                </div> 
               <h5> Already registered. <a href="login1.php"> Login </a></h5>
            </form>
</div> 
        </div>
</div>
</body>
</html>


<?php
if( isset($_POST['register']))
{
    header('location:message.php');
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $password = $_POST['password'];
   $conpassword = $_POST['conpassword'];
   $email = $_POST['email'];
   $telno = $_POST['mobnumber'];


   if($fname != "" && $lname != ""  && $password != ""  && $conpassword != ""  
   && $email != ""  && $telno != "") 
   {
$query = "INSERT INTO form values('$fname','$lname','$password',
'$conpassword','$email','$telno')";
$data = mysqli_query($connection,$query);

if($data)
{
   echo "data inserrted ";
}
else 
{
    echo "failed";
   }
}
else 
{
    echo "<script>alert('fill the form ');</script>";
}
}
?>