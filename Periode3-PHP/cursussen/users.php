<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Overzicht users</title>
</head>

<body>

    <h1>gebruiker aanmaken</h1>


    <!-- <?php
    $conn = mysqli_connect('localhost', 'root', '', 'trainingen');
    $sql = "SELECT * FROM users";
    
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        print_r($row);
        echo $row['id']."";
        echo $row['username']."";
        echo $row['password']."";
        echo $row['naam_voluit']."<br/>";
    }

    ?> -->

    
<form>
  <div class="form-group">
  <label for="exampleInputEmail1">Eigen naam</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="eigen naam">
    <label for="exampleInputEmail1">Gebruikersnaam</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="gebruikersnaam">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Wachtwoord</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord">
  </div>
  <div class="form-check">
   
  </div>
  <button type="submit" class="btn btn-primary">account aanmaken</button>
</form>

</body>

</html>