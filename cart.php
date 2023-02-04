<?php
require_once('config.php');
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
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SSAMJANG Korean Grill Reservation App</title>

   <!-- 
     - favicon
   -->
   <link rel="shortcut icon" href="./assets/images/ssamjang.png" type="image/svg+xml">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="container">

      <section class="shopping-cart">

         <h1 class="heading">SSAMJANG Cart</h1>

         <table>

            <thead>
               <th>image</th>
               <th>name</th>
               <th>price</th>
               <th>quantity</th>
               <th>total price</th>
               <th>action</th>
            </thead>

            <tbody>
               <?php
               session_start();
               $select_cart = mysqli_query($conn, "SELECT * FROM `tblcart`");
               $grand_total = 0;
               if (mysqli_num_rows($select_cart) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
               ?>
                     <tr>
                        <td><img height="200px" class=""  src="images/<?php echo $fetch_cart['image']; ?>" alt=""></td>
                        <td><?php echo $fetch_cart['name']; ?></td>
                        <td>₱<?php echo number_format($fetch_cart['price']); ?>/-</td>
                        <td>
                           <form action="" method="post">
                              <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
                              <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
                              <input type="submit" value="update" name="update_update_btn">
                           </form>
                        </td>
                        <td>₱<?php echo $sub_total = $fetch_cart['price'] * $fetch_cart['quantity']; ?>/-</td>
                        <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Do you really want to remove item?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
                     </tr>
               <?php
               $grand_total = ($sub_total + $grand_total);
               $_SESSION['grand_total'] = $grand_total;
                  };
               };
               ?>

               <tr class="table-bottom">
                  <td><a href="index.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
                  <td colspan="3" style="color: aliceblue;">grand total</td>
                  <td><?php echo $grand_total?></td>
                  <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
               </tr>

            </tbody>

         </table>

         <div class="checkout-btn">
            <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
         </div>

      </section>

   </div>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>