<!DOCTYPE html>
<html lang="en">
<?php include 'header.inc.php'; 

if(!isset($_SESSION['loggedIn']) or $_SESSION['role'] != 'admin') {
    header('Location:login.php');
    exit;
}
?>
<?php

if ($_POST) {


    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $name = $_POST['name'];
    $user = $_POST['id'];

    if (!$conn) {
        die('Connectie is niet gelukt');
    };

    $sql = "UPDATE users SET username='$username', password='$password', name='$name', role='$role' WHERE id='$user' ";
    if (mysqli_query($conn, $sql)) {
        header('location: user.index.php');
    } else {
        die('niet gelukt' . mysqli_error($conn));
    }
}

if ($_GET) {
    $id = $_GET['id'];
    $sql = "SELECT * from users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_assoc($result);
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
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Gebruikersnaam</label>
            <input name="username" value="<?= $users['username'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="eigen naam">
            <label for="exampleInputEmail1">Eigen naam</label>
            <input name="name" value="<?= $users['name'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="gebruikersnaam">
            <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
        </div>

        <label for="role">Rol:</label>
        <select name="role">
            <option value="<?= $users['role'] ?>">Admin</option>
            <option value="<?= $users['role'] ?>">Cashier</option>
        </select>

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