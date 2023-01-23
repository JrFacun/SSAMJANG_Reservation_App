<?php
require_once('config.php');
include('registration.php');

?>
<?php

$test =  $_SESSION['RID'];

if (isset($_POST['create'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $sql = "INSERT INTO tblcustomer (CFname, CLname, CAddress, CContactnum, CEmail, RID) VALUES (?,?,?,?,?,?)";
    $stmtinsert = $conn->prepare($sql);
    $result = $stmtinsert->execute([$firstname, $lastname, $address, $contact, $email,$test]);

}
