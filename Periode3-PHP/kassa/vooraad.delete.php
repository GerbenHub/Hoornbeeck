<?php
include 'header.inc.php';
if(!isset($_SESSION['loggedIn']) or $_SESSION['role'] != 'admin') {
    header('Location:login.php');
    exit;
}

$article = $_GET['id'];
$sql = "DELETE FROM articles WHERE id='$article' ";
if (mysqli_query($conn, $sql)) {
    header('location: vooraad.php');
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