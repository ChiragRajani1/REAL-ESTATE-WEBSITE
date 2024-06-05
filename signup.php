<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

<div class="container">  
        <form id="signup" action="" method="post">
          <h3>Signup</h3>
          <fieldset>
            <input placeholder="User name" type="text" name="username" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
          </fieldset> 
          <fieldset>
            <input placeholder="*******" type="password" name="password" tabindex="2" required>
          </fieldset> 
          <fieldset>
            <button class="btn" name="signup" type="submit" id="login-submit" data-submit="...Sending">Signup</button>
          </fieldset>
        </form>
        
      </div>

<?php
     if (isset($_POST['signup'])){
    include('connection.php');
    $username=$_POST["username"];
    $email = $_POST["email"];
    $password= $_POST["password"];

    $sql="SELECT `Id`, `Username`, `Email`, `Password` FROM `signup` WHERE Email='$email'";
    $sql_res=mysqli_query($con,$sql);

    if(mysqli_num_rows($sql_res)>0){

      echo "<script>
             alert('email already exited');
            </script>";
    }else{
      $insert=mysqli_query($con,"INSERT INTO `signup`(`Id`, `Username`, `Email`, `Password`) VALUES ('','$username','$email','$password')");
      
      if($insert){
        echo "<script>alert('Welcome'); </script>";
            header('location:Home.html');
      }
    }

}


?>


</body>
</html>