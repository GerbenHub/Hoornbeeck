<?php

include 'header.inc.php';
include 'kassa.php';
$query = "SELECT * from articles WHERE code = $_POST[code]";
 $result = mysqli_query($conn, $query);

?>