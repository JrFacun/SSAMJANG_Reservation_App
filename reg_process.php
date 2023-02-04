<?php
require_once('config.php');
require('registration.php');
session_start();
?>
<?php

$test =  $_SESSION['RID'];

if (isset($_POST['create'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO tblcustomer (CFname, CLname, CAddress, CContactnum, RID) VALUES (?,?,?,?,?)";
    $stmtinsert = $conn->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $address, $contact, $email,$test]);

}
