<?php
@include 'config.php';
session_start();

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM tblcart WHERE id = '$remove_id'");
    header("location:cart.php");
}

if (isset($_POST['update_update_btn'])) {
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($conn, "UPDATE tblcart SET quantity = '$update_value' WHERE id = '$update_id'");
    if ($update_quantity_query) {
        header('location:cart.php');
    }
}
if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM tblcart");
    header('location:cart.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Shopping Cart</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $select_cart = mysqli_query($conn, "SELECT * FROM `tblcart`");
            $grand_total = 0;
            if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            ?>
            <tr>
                <td><?php echo $fetch_cart['name']; ?></td>
                <td>$<?php echo number_format($fetch_cart['price']); ?>/-</td>
                <td>
                <form action="" method="post">
                    <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                    <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                    <input type="submit" value="update" name="update_update_btn">
                </form>   
                </td>
                <td>$<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
                <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
            </tr>
            <?php
                $grand_total += (int)$sub_total;  
                };
            };
            ?>
            <tr class="table-bottom">
                <td><a href="index.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
                <td colspan="3">grand total</td>
                <td>$<?php echo $grand_total; ?>/-</td>
                <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
            </tr>
        </tbody>

    </table>
    <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>