<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}
include 'header.inc.php';
?>

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
        if (isset($_SESSION['loggedIn'])) {

            echo '
            <li style="float: left; margin: 5px;"><a href="logout.php" style="text-decoration: none;">Logout</a></li> 
            ';
        } else {
            echo '

            <li style="float: left; margin: 5px;"><a href="login.php" style="text-decoration: none;">login</a></li>
            ';
        }


        ?>
    </ul> <br />

    <h2>Cursussen</h2>




    <div class="card w-50 mx-auto mt-4">
        <div class="card-header">
            Cursussen
        </div>
        <div class="card-body">
            <a href="create.php" class="btn btn-success">Nieuwe Cursus</a>
            <table class="table">
                <thead>
                    <th>Naam</th>
                    <th>Kosten</th>
                    <th>Duur</th>
                </thead>
                <tbody>
                    <?php
                    $query = 'select * from cursussen';
                    $result = mysqli_query($conn, $query);

                    while ($cursus = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $cursus['name'] . '</td>';
                        echo '<td>' . $cursus['costs'] . '</td>';
                        echo '<td>' . $cursus['duration'] . '</td>';
                        

                        if (isset($_SESSION['loggedIn'])) {
                            echo "
                            <td>
                                <a href=\"index.php?ingelogd&cursus=" . $cursus['id'] . "\">Inschrijven</a>
                            </td>
                            <td>
                            <a href=\"edit.php?cursus=" . $cursus['id'] . "\">aanpassen</a>
                            </td>";
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>




    <?php



    if (isset($_GET['cursus'])) {
        echo "je hebt je ingeschreven voor " . $_GET['cursus'] . "!";
    }

    ?>
</body>

</html>