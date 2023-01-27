<?php
require_once('config.php');
session_start();

if (isset($_POST['create'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql_email = "SELECT * FROM tblregistration WHERE REmail = '$email'";
    $resultE = mysqli_query($conn, $sql_email);

    $sql_user = "SELECT * FROM tblregistration WHERE RUser = '$user'";
    $resultU = mysqli_query($conn, $sql_user);

    if (mysqli_num_rows($resultE) > 0) {
        header("Location:login.php?err_e=Email Already Taken");
    } else if (mysqli_num_rows($resultU) > 0) {
        header("Location:login.php?err_u=Username Alredy Taken");
    } else {
        $sql = "INSERT INTO tblregistration (RUser, REmail, RPass) VALUES (?,?,?)";
        $stmtinsert = $conn->prepare($sql);
        $result = $stmtinsert->execute([$user, $email, $password]);
        header("Location:login.php");
    }
}
