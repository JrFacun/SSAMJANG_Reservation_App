<?php
require('config.php');
session_start();
$_SESSION['cart_status'] = 'off';

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_photo'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM tblcart WHERE name = '$product_name'");

    if (mysqli_num_rows($select_cart) > 0) {
        $_SESSION['cart_status'] = 'off';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO tblcart (name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        header("location:index.php");
    }
}
