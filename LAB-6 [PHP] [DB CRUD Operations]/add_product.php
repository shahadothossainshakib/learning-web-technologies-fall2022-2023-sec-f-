<?php
$name = $_POST['name'];
$buyingPrice = $_POST['buyingPrice'];
$sellingPrice = $_POST['sellingPrice'];
$display = $_POST['display'];
if ($display == "display") {
    $connection = mysqli_connect('localhost', 'root', '', 'products_database');
    $sql = "INSERT INTO products_information VALUES('{$name}', '{$buyingPrice}', '{$sellingPrice}', 'Yes')";
    $status = mysqli_query($connection, $sql);
} else {
    $connection = mysqli_connect('localhost', 'root', '', 'products_database');
    $sql = "INSERT INTO products_information VALUES('{$name}', '{$buyingPrice}', '{$sellingPrice}', 'No')";
    $status = mysqli_query($connection, $sql);
}
header('location: display_products.php');