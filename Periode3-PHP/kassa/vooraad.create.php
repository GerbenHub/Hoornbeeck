<?php
include 'header.inc.php';

if(!isset($_SESSION['loggedIn']) or $_SESSION['role'] != 'admin') {
    header('Location:login.php');
    exit;
}
?>

<?php


if ($_POST) {
    $sql = "INSERT INTO articles SET
        code = '" . $_POST['code'] . "',
        description = '" . $_POST['description'] . "',
        supplier = '" . $_POST['supplier'] . "',
        unit = '" . $_POST['unit'] . "',
        price = '" . $_POST['price'] . "',
        stock = '" . $_POST['stock'] . "',
        group_id = '" . $_POST['group_id'] . "'";



    if (!mysqli_query($conn, $sql)) {
        echo mysqli_error($conn);
        die;
    } else {
        header('location: vooraad.php');
    }

    $sql = "SELECT * FROM articles";
    $result = mysqli_query($conn, $sql);
}
?>

<p>Product:</p>


<form method="post" action="">
    <div class="form-group">
        <label for="exampleInputEmail1">Product</label>
        <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product">
        <label for="exampleInputEmail1">Prijs</label>
        <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prijs">
        <label for="exampleInputEmail1">Leverancier</label>
        <input name="supplier" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Leverancier">
        <label for="exampleInputEmail1">Unit</label>
        <input name="unit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unit">
        <label for="exampleInputEmail1">Aantal</label>
        <input name="stock" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Aantal">
        <label for="exampleInputEmail1">Code</label>
        <input name="code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Code">
        <label for="exampleInputEmail1">Groep</label>
         <br>
        <select class="form-select" name="group_id">
                            <?php
                                $sql = "SELECT * FROM `group`";
                                $result = mysqli_query($conn, $sql);
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                                }
                            ?>
                        </select>


    </div>
    <button type="submit" class="btn btn-primary mb-10">Product aanmaken</button>
</form>
</body>

</html>