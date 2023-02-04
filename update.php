<?php
@include 'config.php';
session_start();

$test = $_SESSION['RID'];

if(isset($_POST['update'])){
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $ad = $_POST['address'];
    $cn = $_POST['contact'];

    mysqli_query($conn, "UPDATE tblcustomer SET CFname = '$fn', CLname = '$ln', CAddress = '$ad', CContactnum = '$cn' WHERE RID = '$test'");
    echo "<script>alert('This item is already in your cart.');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="firstname">firstname:</label>
        <input type="text" class="input" name="firstname" id="firstname" required><br><br>
        
        <label for="lastname">lastname:</label>
        <input type="text" class="input" name="lastname" id="lastname" required><br><br>

        <label for="address">address:</label>
        <input type="text" class="input" name="address" id="address" required><br><br>

        <label for="contact">contact:</label>
        <input type="text" class="input" name="contact" id="contact" required><br><br>

        <input type="submit" name="update" value="Update">
    </form>

</body>

</html>