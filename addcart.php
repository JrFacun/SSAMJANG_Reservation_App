<?php
require('config.php');

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM tblcart WHERE name = '$product_name'");

    if (mysqli_num_rows($select_cart) > 0) {
        echo "NICE";
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO tblcart (name, price, quantity) VALUES('$product_name', '$product_price', '$product_quantity')");
        header("location:index.php");
    }
}
