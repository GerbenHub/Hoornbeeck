<!DOCTYPE html>

<html>


<head>
    <meta http-equiv="Content Type" content="text/html; charset=utf-8" />
    <title>Cursussen</title>
</head>

<body>

    <ul style="margin: 5px; list-style-type: none;">
        <li style="float: left; margin: 5px;"><a href="index.php" style="text-decoration: none;">Home</a></li>
        <?php
        if (isset($_GET['ingelogd'])) {

            echo '
        <li style="float: left; margin: 5px;"><a href="index.php" style="text-decoration: none;">Logout</a></li> 
        ';
        } else {
            echo '

        <li style="float: left; margin: 5px;"><a href="login.php" style="text-decoration: none;">login</a></li>
        ';
        }


        ?>
    </ul> <br />

    <h2>Cursussen</h2>




    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>Cursus</td>
            <td>Omschrijving</td>
            <td>Prijs</td>
        </tr>

        <?php

        $items = array(
            array(
                "cursus" => "Javascript",
                "omschrijving" => "Programmeren in de browser",
                "prijs" => 90.00
            ),
            array(
                "cursus" => "PHP",
                "omschrijving" => "Programmeren op de server",
                "prijs" => 150.00
            ),
            array(
                "cursus" => "Dreamweaver Eindwerk",
                "omschrijving" => "Webdesign in de praktijk",
                "prijs" => 180.00
            ),
            array(
                "cursus" => "Dreamweaver",
                "omschrijving" => "Webdesign thuis",
                "prijs" => 280.00
            )

        );


        foreach ($items as $item) {
            echo "
             <tr>
                <td>" . $item['cursus'] . "</td>
                <td>" . $item['omschrijving'] . "</td>
                <td>" . $item['prijs'] . "</td>";

            if (isset($_GET['ingelogd'])) {
                echo "
                  <td>
                    <a href=\"index.php?ingelogd&cursus={$item['cursus']}\">Inschrijven</a>
                </td>";
            }
        };

        ?>
    </table>
    </form>

    <?php

    if (isset($_GET['cursus'])) {
        echo "je hebt je ingeschreven voor " . $_GET['cursus'] . "!";
    }

    ?>
</body>

</html>