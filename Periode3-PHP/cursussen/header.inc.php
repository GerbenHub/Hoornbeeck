<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<html>

<body>
    <div class="container">

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'trainingen');
        if (!$conn) {
            die('Connectie is niet gelukt.');
        }
        ?>