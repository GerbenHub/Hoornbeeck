<?php
include 'header.inc.php';
if(!isset($_SESSION['loggedIn']) or $_SESSION['role'] != 'admin') {
    header('Location:login.php');
    exit;
}

?>
<?php


if (!$conn) {
    die('Connectie is niet gelukt');
}
$sql = 'select * from users';
$result = mysqli_query($conn, $sql);

?>


<div class="card w-50 mx-auto mt-4">
    <div class="card-header">
        Gebruikers
    </div>
    <div class="card-body">
        <a href="user.create.php" class="btn btn-success">Nieuwe gebruiker</a>
        <table class="table">
            <thead>
                <th>Gebruikersnaam</th>
                <th>Naam</th>
                <th>rol</th>
            </thead>
            <tbody>
            <?php
                   $query = 'select * from users';
                   $result = mysqli_query($conn, $query);
                while ($user = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $user['username'] . '</td>';
                    echo '<td>' . $user['name'] . '</td>';
                    echo '<td>' . $user['role'] . '</td>';
                    echo '</tr>';

                    if (isset($_SESSION['loggedIn'])) {
                        echo "
                        <td>
                        <a href=\"user.edit.php?id=" . $user['id'] . "\">Aanpassen</a>
                        </td>
                        <td>
                        <a href=\"user.delete.php?user=" . $user['id'] . "\">Verwijderen</a>
                        </td>";
                    }
                    echo '</tr>';
                }
            ?>
            </tbody>

        </table>
    </div>
</div>