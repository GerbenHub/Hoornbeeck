<?php include 'header.inc.php'; ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cursussen</title>
</head>

<body>

    <h2>Cursussen</h2>

   

    <?php
if(isset($_SESSION['loggedIn'])) {
    header('Location:kassa.php');
    exit;
}
   

    $melding = "";

    if ($_POST) {

        $loginnaam = $_POST['loginnaam'];
        $wachtwoord = $_POST['wachtwoord'];

        if (empty($loginnaam) or empty($wachtwoord)) {
            $melding = "vul beide velden in";
        } else {


            $sql = "SELECT * FROM users where username = '$loginnaam' and password = '$wachtwoord'";



            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);



            if (mysqli_num_rows($result) == 1) {
                
                $_SESSION['loggedIn'] = $_POST['loginnaam'];
                $_SESSION['role'] = $row['role'];
                header("Location: kassa.php");
            } else {
                $melding = "Onjuiste gebruikersnaam en/of wachtwoord!";
            }
        }
    }

    if ($melding) {
        echo '<p style="color:red">' . $melding . '</p>';
    }


    ?>

    <form action="" method="POST">
    <div class="card w-50 mx-auto">
        <table>
            <tr>
                <td>Gebruiker:</td>
                <td><input type="text" name="loginnaam" /></td>
            </tr>
            <tr>
                <td>Wachtwoord:</td>
                <td><input type="password" name="wachtwoord" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Inloggen" /></td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>