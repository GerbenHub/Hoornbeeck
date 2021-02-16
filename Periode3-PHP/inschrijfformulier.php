<!DOCTYPE html>



<html>

<head>
    <meta http-equiv="Content Type" content="text/html; charset=utf-8" />
    <title>Cursussen</title>
</head>

<body>

    <h2>Cursussen</h2>

    <form method="post" action="?">

        <label>Geef je naam:</label>
        <input type="text" name="naam">

        <p></p>

        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td>Cursus</td>
                <td>Omschrijving</td>
                <td>Prijs</td>
                <td>&nbsp;</td>
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
        <td>" . $item['prijs'] . "</td>
        <td>
            <input type='submit' value='Inschrijven'>
        </td>
    </tr>";
            }

            echo "</table>
</form>";

            if ($_POST) {
                if ($_POST['naam']) {
                    echo "Beste " . $_POST['naam'] . ",je hebt je ingeschreven voor een hele vreemde cursus";
                } else {
                    echo "Iemand heeft zich ingeschreven voor een hele vreemde cursus";
                }
            }


            ?>


</body>

</html>