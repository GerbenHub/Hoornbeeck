<?php
include 'header.inc.php';
if(!isset($_SESSION['loggedIn']) or $_SESSION['role'] != 'admin') {
    header('Location:login.php');
    exit;
}

?>
<?php
if ($_POST) {


    $description = $_POST['description'];
    $price = $_POST['price'];
    $supplier = $_POST['supplier'];
    $unit = $_POST['unit'];
    $stock = $_POST['stock'];
    $code = $_POST['code'];
    $group = $_POST['group_id'];
    $article = $_POST['id'];

    if (!$conn) {
        die('Connectie is niet gelukt');
    };

    $sql = "UPDATE articles SET code='$code', description='$description', supplier='$supplier', unit='$unit', price='$price', stock='$stock', group_id='$group' WHERE id='$article' ";
    if (mysqli_query($conn, $sql)) {
        header('location: vooraad.php');
    } else {
        die('niet gelukt' . mysqli_error($conn));
    }
}

if ($_GET) {
    $id = $_GET['id'];
    $sql = "SELECT * from articles WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $article = mysqli_fetch_assoc($result);
}

?>

<p>Product:</p>


<form method="post" action="">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Product</label>
        <input name="description" value="<?= $article['description'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product">
        <label for="exampleInputEmail1">Prijs</label>
        <input name="price" value="<?= $article['price'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prijs">
        <label for="exampleInputEmail1">Leverancier</label>
        <input name="supplier" value="<?= $article['supplier'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Leverancier">
        <label for="exampleInputEmail1">Unit</label>
        <input name="unit" value="<?= $article['unit'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit">
        <label for="exampleInputEmail1">Aantal</label>
        <input name="stock" value="<?= $article['stock'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Aantal">
        <label for="exampleInputEmail1">Code</label>
        <input name="code" value="<?= $article['code'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Code">
        <label for="exampleInputEmail1">Groep</label>
        <select class="form-select" name="group_id">
                            <?php
                                $sql = "SELECT * FROM `group`";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                                }
                            ?>
                        </select>
        <br>


    </div>
    <button type="submit" class="btn btn-primary mb-10">Product aanmaken</button>
</form>
</body>

</html>