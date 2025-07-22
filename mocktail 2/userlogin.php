<?php
session_start();
$servername ="localhost";
$dbname = "mocktail";
$username = "mocktail";
$password = "Letmein1";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error ){
    die("Connection failed:" . $conn->connect_error) ;
}

if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $uname = $_POST['uname'];
    $password = $_POST['pword'];
}

// Prepare and bind
$stmt1 = $conn->prepare("SELECT id FROM mocktail_users WHERE uname = ?");
$stmt1->bind_param("s", $uname);


// Execute statement
$stmt1->execute();
$stmt1->store_result();

;
if ($stmt1->num_rows > 0) {
    $stmt1->bind_result($uid);
    $stmt1->fetch();

    $stmt2 = $conn->prepare("SELECT pword_hash  FROM mocktail_passwords WHERE uid = ?");
    $stmt2->bind_param("s", $uid);

    $stmt2->execute();
    $stmt2->store_result();
    $stmt2->bind_result($pword_hash);
    $stmt2->fetch();

   //echo ($pword_hash);
    if (password_verify($password, $pword_hash)) {
        $_SESSION['uid'] = $uid;
        header("Location:homepage.php");
        exit();
    } else {
        echo "<script>document.getElementById('error-message').textContent = 'Invalid password';</script>";
    }
} else {
    echo "<script>document.getElementById('error-message').textContent = 'No user found';</script>";
}
$stmt1->close();
$stmt2->close();

$conn->close();