<?php 
session_start();
?>
<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<html>

<body>
    <table style="z-index: 100;">
        <tr>
            <td>
                <img src="logo.png" style="top: 10%; border-radius: 10px;">
            </td>

            <td style="vertical-align: top;">
                <ul style="margin: 5px; list-style-type: none;">

                    <li style="float: left; margin: 5px;"><a href="kassa.php" style="text-decoration: none;">Kassa</a></li>
                    <?php
                    if (isset($_SESSION['loggedIn'])) {

                        echo '
    <li style=" float: left; margin: 5px;"><a href="logout.php" style="text-decoration: none;">Logout</a></li> 
    ';
                        echo '
    <li style="float: left; margin: 5px;"><a href="user.index.php" style="text-decoration: none;">Gebruikers</a></li> 
    ';
                        echo '
    <li style=" float: left; margin: 5px;"><a href="vooraad.php" style="text-decoration: none;">Vooraad</a></li> 
    ';
    echo '
    <li style=" float: left; margin: 5px;"><a href="beveiliging.php" style="text-decoration: none;">Camerabeelden</a></li> 
    ';
                    } else {
                        echo '

    <li style="float: left; margin: 5px;"><a href="login.php" style="text-decoration: none;">Login</a></li>
    ';
                    }


                    ?>
                </ul>
            </td>
        </tr>
    </table>



    <div class="container">

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'project03');
        if (!$conn) {
            die('Connectie is niet gelukt.');
        }
        ?>

        <style>
            body {
                background-color: #e0e639;
                color: #24bdf0;
                border-radius: 10px;
            }
        </style>