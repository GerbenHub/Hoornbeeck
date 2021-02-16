<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <?php

    $meer = false;
    if ($_POST) {
        $meer = $_POST["hoeveelheid"] == "meer";
    }
 
    ?>

    <h1>Sneeuwvrij??</h1>
    <p>Bij meer dan 10 centimeter sneeuw is school dicht</p>
    <form action="" method="post">
        <input type="radio" name="hoeveelheid" value="meer" <?php if ($_POST && $meer) { echo "checked"; } ?> />                   
        <label>er ligt meer dan 10 cm sneeuw</label><br />
        <input type="radio" name="hoeveelheid" value="minder" <?php if ($_POST && $meer == false) { echo "checked"; } ?> />                                                       
        <label>er ligt minder dan 10 cm sneeuw</label><br />
        <input type="submit" value="bepaal" />
    </form>
 
    <?php
    if ($_POST) {

        if ($meer) {
            echo "de school is dicht.";
        } else {
            echo "de school is open";
        }
    }
    ?>
</body>

</html>