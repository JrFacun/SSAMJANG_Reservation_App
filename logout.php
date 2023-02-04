<?php
require ('config.php');

session_start();
session_destroy();

mysqli_query($conn,"DELETE FROM tblcart");

header("location:./login.php");

?>