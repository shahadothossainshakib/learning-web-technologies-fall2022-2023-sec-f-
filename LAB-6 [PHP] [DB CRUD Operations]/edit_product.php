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
    <form action="editing_product.php" method="POST">
        <fieldset>
            <legend><h1>EDIT PRODUCT</h1></legend>
            <label for="name">Name</label>
            <br>
            <br>
            <input type="text" name="name" id="name" value=<?php echo $name ?>>
            <br>
            <br>
            <label for="buying_price">Buying Price</label>
            <br>
            <br>
            <input type="number" name="buyingPrice" id="buying_price" value=<?php echo $buyingPrice ?>>
            <br>
            <br>
            <label for="selling_price">Selling Price</label>
            <br>
            <br>
            <input type="number" name="sellingPrice" id="selling_price" value=<?php echo $sellingPrice ?>>
            <br>
            <br>
            <hr>
            <br>
            <input type="checkbox" name="display" id="display" value="display"
            <?php
            if ($displayable == 'Yes') {
                echo "checked";
            }
            ?>
            >
            <label for="display">Display</label>
            <br>
            <br>
            <hr>
            <br>
            <br>
            <input type="submit" value="SAVE">
        </fieldset>
    </form>
</body>
</html>