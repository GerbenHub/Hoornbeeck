<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Cursussen</title>
</head>

<body>

    <h2>Cursussen</h2>

    <ul style="margin: 5px; list-style-type: none;">
        <li style="float: left; text-decoration: none; margin: 5px;"><a href="index.php">Home</a></li>
        <li style="text-decoration: none; float: left; margin: 5px;"><a href="login.php">login</a></li>
    </ul> <br />

    <?php

    session_start();

    $melding = "";

    if ($_POST) {

        $loginnaam = $_POST['loginnaam'];
        $wachtwoord = $_POST['wachtwoord'];

        if (empty($loginnaam) or empty($wachtwoord)) {
            $melding = "vul beide velden in";
        } else {

            $conn = mysqli_connect('localhost', 'root', '', 'trainingen');
            $sql = "SELECT * FROM users where username = '$loginnaam' and password = '$wachtwoord'";



            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['loggedIn'] = $_POST['loginnaam'];
                header("Location: index.php");
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

</body>

</html>