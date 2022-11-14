<?php
session_start();
$name = $_GET['name'];
$_SESSION['name'] = $name;
$connection = mysqli_connect('localhost', 'root', '', 'products_database');
$sql = "SELECT * FROM products_information";
$productsInformation = mysqli_query($connection, $sql);
while ($productInformation = mysqli_fetch_array($productsInformation)) {
    if ($productInformation[0] == $name) {
        $buyingPrice = $productInformation[1];
        $sellingPrice = $productInformation[2];
        $displayable = $productInformation[3];
    }
}
?>

<html>
<head>
    <title>EDIT PRODUCT</title>
</head>
<style>
    fieldset {
        display: inline-block;
        width: 50vw;
    }
</style>
<body>
    <form action="deleting_product.php" method="POST">
        <fieldset>
            <legend><h1>DELETE PRODUCT</h1></legend>
            <?php
            echo "Name: {$name}<br>";
            echo "Buying Price: {$buyingPrice}<br>";
            echo "Buying Price: {$buyingPrice}<br>";
            echo "Displayable: {$displayable}<hr>";
            ?>
            <input type="submit" value="Delete">
        </fieldset>
    </form>
</body>
</html>