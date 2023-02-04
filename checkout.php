<?php
@include 'config.php';
session_start();

$test =  $_SESSION['RID'];

$sqlCID = "SELECT * FROM tblcustomer WHERE RID = '$test'";
$queryCID = mysqli_query($conn, $sqlCID);
if(mysqli_num_rows($queryCID) > 0){
    $fetchCID = mysqli_fetch_assoc($queryCID);
    $_SESSION['CID'] = $fetchCID['CID'];
}
$testCID = $_SESSION['CID'];

if(isset($_POST['reserve'])){
    $numperson = $_POST['numperson'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query_reserve = mysqli_query($conn, "INSERT INTO tblreservation (res_Numperson, res_Date, res_Time, CID) VALUES ('$numperson', '$date', '$time', '$testCID')");

	mysqli_query($conn, "DELETE FROM tblcart");

    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="img/ssamjang.png" type="image/svg+xml">
	<title>SSAMJANG Korean Grill Reservation App</title>
	<link rel="stylesheet" type="text/css" href="css/style_res.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/waves.png">
	<div class="container">
		<div class="img">
			<img src="img/reserve.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<h3 class="title">RESERVATION FORM</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Reservation Id</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-users"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Number of Person</h5>
           		    	<input type="number" name="numperson" class="input">
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-calendar"></i>
           		   </div>
           		   <div class="div">
           		    	<h5></h5>
           		    	<input type="date" name="date" class="input">
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-clock" name="time"></i>
           		   </div>
           		   <div class="div">
           		    	<h5></h5>
           		    	<input type="time" class="input" min="10:00" max="9:00">
            	   </div>
            	</div>
            	<input type="submit" name="reserve" class="btn" value="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
