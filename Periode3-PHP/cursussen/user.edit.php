<!DOCTYPE html>
<html lang="en">
<?php

include 'header.inc.php';

if ($_POST) {


    $username = $_POST['username'];
    $password = $_POST['password'];
    $naam_voluit = $_POST['naam_voluit'];
    $user = $_POST['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'trainingen');
    if (!$conn) {
        die('Connectie is niet gelukt');
    };

    $sql = "UPDATE users SET username='$username', password='$password', naam_voluit='$naam_voluit' WHERE id='$user' ";
    if (mysqli_query($conn, $sql)) {
        header('location: user.index.php'); 
    } else {
        die('niet gelukt' . mysqli_error($conn));
    }
}


?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Cursussen aanpassen</title>
</head>

<body>


    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $_GET['user'] ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Eigen naam</label>
            <input name="naam_voluit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="eigen naam">
            <label for="exampleInputEmail1">Gebruikersnaam</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="gebruikersnaam">
            <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Wachtwoord</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord">
        </div>
        <div class="form-check">

        </div>
        <button type="submit" class="btn btn-primary">account aanpassen</button>
    </form>
</body>

</html>