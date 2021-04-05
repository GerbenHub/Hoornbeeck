<html>
<?php include 'header.inc.php'; ?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Overzicht users</title>
</head>


<body>

  <h1>gebruiker aanmaken</h1>

  <?php

  if ($_POST) {

    $conn = mysqli_connect('localhost', 'root', '', 'trainingen');
    if (!$conn) {
      die('Connectie is niet gelukt');
    }

    $sql = "INSER into users (username, password, naam_voluit)
      values ('$_POST[username]', '$_POST[password]', '$_POST[naam_voluit]')";

    if (!mysqli_query($conn, $sql)) {
      echo mysqli_error($conn); die;
    } else {
      header('location: user.index.php');
    }
  }

  ?>


  <form method="post" action="">
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
    <button type="submit" class="btn btn-primary">account aanmaken</button>
  </form>

</body>

</html>