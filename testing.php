<?php
@include 'config.php';
session_start();

$testing = $_SESSION['CID'];


$sqlresID = "SELECT * FROM tblreservation WHERE CID = '$testing'";
$queryresID = mysqli_query($conn, $sqlresID);
    if(mysqli_num_rows($queryresID) > 0){
        $fetchresID = mysqli_fetch_assoc($queryresID);
        $_SESSION['res_ID'] = $fetchresID['res_ID'];
    }

echo $_SESSION['res_ID'];
