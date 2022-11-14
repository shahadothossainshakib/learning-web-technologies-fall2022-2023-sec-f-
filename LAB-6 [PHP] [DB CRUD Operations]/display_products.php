<html>
<head>
    <title>ADD PRODUCT</title>
</head>
<style>
    fieldset {
        display: inline-block;
    }
    table, th, td {
        border: 1px solid;
    }
</style>
<body>
    <form action="add_product.php" method="POST">
        <fieldset>
            <legend><h1>DISPLAY</h1></legend>
            <table>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                </tr>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'products_database');
                $sql = "SELECT * FROM products_information";
                $productsInformation = mysqli_query($connection, $sql);
                while ($productInformation = mysqli_fetch_array($productsInformation)) {
                    if ($productInformation[3] == 'Yes') {
                        echo "<tr>";
                        echo "<td>{$productInformation[0]}</td>";
                        $profit = $productInformation[2] - $productInformation[1];
                        echo "<td>{$profit}</td>";
                        echo "<td><a href='edit_product.php?name={$productInformation[0]}'>edit</a></td>";
                        echo "<td><a href='delete_product.php?name={$productInformation[0]}'>delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </fieldset>
    </form>
</body>
</html>