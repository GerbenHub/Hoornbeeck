<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}
include 'header.inc.php';
$user = $_GET['user'];
$conn = mysqli_connect('localhost', 'root', '', 'trainingen');
$sql = "DELETE FROM users WHERE id='$user' ";
if (mysqli_query($conn, $sql)) {
    header('location: user.index.php');
} else {
    die('niet gelukt' . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



</body>

</html>