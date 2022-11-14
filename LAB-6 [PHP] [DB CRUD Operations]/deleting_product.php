<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'products_database');
$sql = "DELETE FROM products_information WHERE name='{$_SESSION['name']}'";
$status = mysqli_query($connection, $sql);

unset($_SESSION['name']);
header('location: display_products.php');