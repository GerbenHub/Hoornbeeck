<!DOCTYPE html>
<html lang="en">
<?php 
if ($_POST) {
$name = $_POST['name'];
$costs = $_POST['costs'];
$duration = $_POST['duration'];

  $conn = mysqli_connect('localhost', 'root', '', 'trainingen');
  $sql = "INSERT INTO cursussen (name, costs, duration) VALUES ('$name', '$costs', '$duration')";
  if(mysqli_query($conn, $sql)) {
    header('location: index.php');

  } else {
    die('niet gelukt'. mysqli_error($conn));
  }

}


?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="Class" class="form-label">Costs</label>
          <input type="text" name="costs" class="form-control" id="Class">
        </div>
        <div class="mb-3">
            <label for="Class" class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" id="Class">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>

