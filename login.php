<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <form id="login" action="" method="post">
          <h3>Login</h3>
          <fieldset>
            <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
          </fieldset> 
          <fieldset>
            <input placeholder="*******" type="password" name="password" tabindex="2" required>
          </fieldset> 
          <fieldset>
            <button class="btn" name="login" type="submit" id="login-submit" data-submit="...Sending">Login</button>
          </fieldset>
        </form>
        <a href="signup.php"><button class="btn signupbtn" data-submit="...Sending">Signup</button></a>


        <?php
        
            if(isset($_POST['login'])){
            include("connection.php");
                $email=$_POST['email'];
                $password=$_POST['password'];

            $select = "SELECT `Id`, `Username`, `Email`, `Password` FROM `signup` WHERE Email='$email' and Password='$password'";
            $sql = mysqli_query($con, $select);
            if (mysqli_num_rows($sql) > 0) {
                while ($res = mysqli_fetch_array($sql)){
                    echo "<script>alert('Welcome');</script>";
                    header("location:Home.html");
                }
            }
            else{
              echo "<script>
              alert('email & password does not matched.');
              </script>";
            }
        
        }
        ?>
</div>
</body>
</html>