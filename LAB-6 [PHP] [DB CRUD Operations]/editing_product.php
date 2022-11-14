<?php
session_start();
$name = $_POST['name'];
$buyingPrice = $_POST['buyingPrice'];
$sellingPrice = $_POST['sellingPrice'];
$display =  $_POST['display'];

$connection = mysqli_connect('localhost', 'root', '', 'products_database');
$sql = "UPDATE products_information SET name='{$name}' WHERE name='{$_SESSION['name']}'";
$status = mysqli_query($connection, $sql);
$sql = "UPDATE products_information SET buying_price='{$buyingPrice}' WHERE name='{$_SESSION['name']}'";
$status = mysqli_query($connection, $sql);
$sql = "UPDATE products_information SET selling_price='{$sellingPrice}' WHERE name='{$_SESSION['name']}'";
$status = mysqli_query($connection, $sql);
$sql = "UPDATE products_information SET displayable='{$display}' WHERE name='{$_SESSION['name']}'";
$status = mysqli_query($connection, $sql);

unset($_SESSION['name']);
header('location: display_products.php');