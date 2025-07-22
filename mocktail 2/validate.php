<?php
session_start();
$user = $_POST['user'];
$password = $_POST['pword'];
$hashed = password_hash($password, PASSWORD_DEFAULT);
echo $hashed;
//echo $user;
$answer = '$2y$10$U9GpYwUTv8ASpXz5f4l80Odtj/.AWUkIvfAZ0MA.gEnr7jPhP12Oe';
$valid = password_verify($password,$answer);
echo $valid;
if ($valid == true) {
    echo "Password Correct";
}else{
    echo "Password Incorrect";
}
$_SESSION['user'] = $user;
//header('Location:index.php');