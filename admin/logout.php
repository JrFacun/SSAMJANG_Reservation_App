<?php
session_start();
session_destroy();

header("location:../login.php");

if($_SESSION['status'] == 'invalid'){
    echo "<script>window.location.href = 'home.php' </script>";
    header("location:../login.php");
}

?>