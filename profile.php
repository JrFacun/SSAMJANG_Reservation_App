<?php
@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- <section class="py-2">
        <div class="container">
            <div class="card-rounder-0">
                <div class="card-body">
                    <div class="w-100 justify-content-between d-flex">
                        <h4><b>My Reservation</b></h4>
                        <a href="./?p=edit_account" class="btn btn btn-dark btn-flat"><div class="fa fa-user-cog"></div>Manage Account </a>

                    </div>

                </div>
            </div>
        </div>

    </section> -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();
            $CID = $_SESSION['CID'];
            $select_res = mysqli_query($conn, "SELECT * FROM tblreservation WHERE CID = '$CID'");
            if (mysqli_num_rows($select_res)) {
                while ($fetch_res = mysqli_fetch_assoc($select_res)) {
            ?>
                    <tr>
                        <th scope="row"><?php echo $fetch_res['res_Date'] ?></th>
                        <td><a href="#"><?php echo uniqid($fetch_res['CID']) ?></a></td>
                        <td><?php echo $_SESSION['grand_total'] ?></td>
                        <td><?php echo $fetch_res['status'] ?> </td>
                    </tr>
            <?php
                };
            };
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="checkout-btn">
        <a href="index.php" class="btn ">Back</a>
    </div>
    <div class="checkout-btn">
        <a href="update.php" class="btn ">Manage Profile</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>