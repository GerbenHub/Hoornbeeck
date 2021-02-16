<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <title>Cursussen</title>
    </head>

<body>

<h2>Cursussen</h2>

<ul style="margin: 5px; list-style-type: none;">
  <li style="float: left; text-decoration: none; margin: 5px;"><a href="index.php">Home</a></li>
  <li style="text-decoration: none; float: left; margin: 5px;"><a href="login.php">login</a></li>
</ul> <br/>

<?php

$melding = "";

if ($_POST) {
    $user = "Gerben";
    $password = "2004";

    $loginnaam = $_POST['loginnaam'];
    $wachwoord = $_POST['wachtwoord'];

    if (empty($loginnaam) or empty($wachwoord)) {
        $melding = "vul beide velden in";
    } else {
        if($loginnaam == $user && $wachwoord == $password) {
            header("Location: index.php?ingelogd");
        } else {
            $melding = "Onjuiste gebruikersnaam en/of wachtwoord!";
        }
    }
}

if ($melding) {
    echo '<p style="color:red">' .$melding. '</p>';

}


?>

<form action="" method="POST">
    <table>
        <tr>
            <td>Gebruiker:</td>
            <td><input type="text" name="loginnaam"/></td>
        </tr>
        <tr>
            <td>Wachtwoord:</td>
            <td><input type="password" name="wachtwoord"/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Inloggen"/></td>
        </tr>
    </table>
</form>

</body>    
</html>