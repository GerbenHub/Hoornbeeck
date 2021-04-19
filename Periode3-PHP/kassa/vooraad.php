<?php
include 'header.inc.php';

if (!isset($_SESSION['loggedIn']) or $_SESSION['role'] != 'admin') {
    header('Location:login.php');
    exit;
}


?>
<?php


if (!$conn) {
    die('Connectie is niet gelukt');
}



?>
<h2 style="text-align: center;">Vooraad</h2>

<div class="card w-60 mx-auto mt-4">
    <div class="card-header">
        Producten
    </div>
    <div class="card-body">
        <a href="vooraad.create.php" class="btn btn-success">Nieuw product</a>
        <table class="table">
            <thead>
                <th>Product</th>
                <th>leverancier</th>
                <th>Prijs</th>
                <th>Unit</th>
                <th>aantal</th>
                <th>code</th>
                <th>groep</th>

            </thead>
            <tbody>
                <?php

                $query = 'select * from articles';
                $result = mysqli_query($conn, $query);
                while ($article = mysqli_fetch_assoc($result)) {
                    $id = $article['group_id'];
                    $sql = "SELECT * from `group` WHERE id = '$id'";
                    $resulta = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($resulta)) {
                        $groupname = $row['name'];
                    }
                    echo '<tr>';
                    echo '<td>' . $article['description'] . '</td>';
                    echo '<td>' . $article['supplier'] . '</td>';
                    echo '<td>' . $article['price'] . '</td>';
                    echo '<td>' . $article['unit'] . '</td>';
                    echo '<td>' . $article['stock'] . '</td>';
                    echo '<td>' . $article['code'] . '</td>';
                    echo '<td>' . $groupname . '</td>';

                    if (isset($_SESSION['loggedIn'])) {
                        echo "
                        <td>
                        <a href=\"vooraad.edit.php?id=" . $article['id'] . "\">Aanpassen</a>
                        </td>
                        <td>
                        <a href=\"vooraad.delete.php?id=" . $article['id'] . "\">Verwijderen</a>
                        </td>";
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>

        </table>
    </div>
</div>