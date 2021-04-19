<?php
include 'header.inc.php';
if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="Content Type" content="text/html; charset=utf-8" />
    <title>Kassa</title>
</head>

<body>

    <br />




    <form action="?" method="POST">

        <div class="card w-50 mx-auto" style="z-index: 0; margin-top: -150px;">
            <div class="card-header">
                Kassa
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <input type="text" name="code" placeholder="Product code..." style="width:300px;"><br><br>
                    <input type="submit" name="submit" value="Search" id="button">
                </form><br><br>
                <table class="table">
                    <thead>
                        <th>Naam</th>
                        <th>Unit</th>
                        <th>Prijs</th>
                        <th>code</th>
                        <th>Vooraad</th>
                        <th>Toevoegen</th>


                    </thead>
                    <tbody>
                        <?php
                        if ($_POST) {

                            $code = $_POST['code'];
                            $sql = "SELECT * FROM articles WHERE code='$code'";
                            $result = mysqli_query($conn, $sql);
                            while ($product = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $product['description'] . '</td>';
                                echo '<td>' . $product['unit'] . '</td>';
                                echo '<td>' . $product['price'] . '</td>';
                                echo '<td>' . $product['code'] . '</td>';
                                echo '<td>' . $product['stock'] . '</td>';
                                echo '<td>' . $product['supplier'] . '</td>';
                                echo '<td></td>';
                                echo '</tr>';

                                echo '<td><a href="kassa.php?product=' . $product['id'] . '" style="text-decoration: none;">Toevoegen</a></td>';
                            }
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </form>

    <div class="card w-50 mx-auto" style=" color: #24bdf0; border-radius: 10px;background-color: #e0e639; z-index: 0; margin-top: 50px;">
        <table style=" color: #24bdf0;" class="table">
            <thead>
                <th>Naam</th>
                <th>code</th>
                <th>Vooraad</th>
                <th>Prijs</th>
                <th>verwijderen</th>
            </thead>

            <tbody>
                <?php
                $totalprice = 0;


                if (isset($_GET['product'])) {
                    $code = $_GET['product'];
                    $sql = "UPDATE articles SET stock = stock - 1 WHERE id='$code'";
                    $result = mysqli_query($conn, $sql);
                    $id = $_GET['product'];
                    $sql = "SELECT * FROM articles WHERE id='$id'";
                    $result = mysqli_query($conn, $sql);
                    $_SESSION['product'][$_GET['product']] = mysqli_fetch_assoc($result);
                }

                if (isset($_GET['delete'])) {
                    unset($_SESSION['product'][$_GET['delete']]);
                }
                if (isset($_SESSION['product'])) {
                    foreach ($_SESSION['product'] as $product) {
                        $prijs = (float) $product['price'];
                        echo '<tr>';
                        echo '<td>' . $product['description'] . '</td>';
                        echo '<td>' . $product['code'] . '</td>';
                        echo '<td>' . $product['stock'] . '</td>';
                        echo '<td> ex btw €'  . number_format($prijs / 109 * 100, 2) . '</td>';
                        echo '<td> <a href="kassa.php?delete=' . $product['id'] . '" style="text-decoration: none;">Verwijderen</a></td>';
                        echo '</tr>';
                        $totalprice += $prijs;
                    }
                    echo '<tr>';
                    echo '<td>inc. btw  €' . number_format($totalprice, 2) . '</td>';
                    echo '</tr>';
                }


                ?>


            </tbody>
        </table>
    </div>
</body>

</html>


<?php










?>




<?php


?>
</tbody>
</table>
</body>

</html>