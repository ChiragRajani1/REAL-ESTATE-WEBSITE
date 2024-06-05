<?php
if (isset($_POST['submit'])) {
    include('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $insert = mysqli_query($con, "INSERT INTO `contact`(`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES ('','$name','$email','$phone','$message')");
    if ($insert) {
        // echo "<script>
        //     alert('welcome');
        //   </script>";
        header("location:Home.html");
    }

}
