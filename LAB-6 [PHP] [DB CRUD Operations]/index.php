<html>
<head>
    <title>ADD PRODUCT</title>
</head>
<style>
    fieldset {
        display: inline-block;
        width: 50vw;
    }
</style>
<body>
    <form action="add_product.php" method="POST">
        <fieldset>
            <legend><h1>ADD PRODUCT</h1></legend>
            <label for="name">Name</label>
            <br>
            <br>
            <input type="text" name="name" id="name">
            <br>
            <br>
            <label for="buying_price">Buying Price</label>
            <br>
            <br>
            <input type="number" name="buyingPrice" id="buying_price">
            <br>
            <br>
            <label for="selling_price">Selling Price</label>
            <br>
            <br>
            <input type="number" name="sellingPrice" id="selling_price">
            <br>
            <br>
            <hr>
            <br>
            <input type="checkbox" name="display" id="display" value="display">
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