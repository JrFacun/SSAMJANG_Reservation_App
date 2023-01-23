<?php
require_once('config.php');
require_once('reg_process.php');
session_start();

if (!$conn) {
	echo 'connection failed!';
} else if (isset($_POST['create'])) {
	header("location:index.php");
} else {
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM tblRegistration WHERE RUser = '$username' AND RPass = '$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$_SESSION['status'] = 'valid';
			$account = mysqli_fetch_assoc($result);
			$_SESSION['RID'] = $account['RID'];
			$sLevel = $account['RID'];

			$sql2 = "SELECT cLevel FROM tblCustomer WHERE RID = $sLevel";
			$result2 = mysqli_query($conn, $sql2);
			$account2 = mysqli_fetch_array($result2);

			if ($account2['cLevel'] == 1) {
				header("location:index.php");
			} else if ($account2['cLevel'] == 2) {
				header("location:admin/index.html");
			} else if ($account2['cLevel'] == null) {
				header("location:registration.php");
			}
		} else {
			header("Location:login.php?error=Incorrect Username or password");
		}
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>SSAMJANG Korean Grill Reservation App</title>
	<link rel="stylesheet" type="text/css" href="css/reg_style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="img/waves.png">
	<div class="container">
		<div class="img">
			<img src="img/forms.svg">
		</div>
		<div class="login-content">
			<form action="registration.php" method="post">
				<img src="img/ssamjang.png">
				<h3 class="title">REGISTRATION FORMS</h3>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>First Name</h5>
						<input type="text" class="input" name="firstname" id="firstname" required>
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Last Name</h5>
						<input type="text" name="lastname" id="lastname" class="input" required>
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-home"></i>
					</div>
					<div class="div">
						<h5>Address</h5>
						<input type="text" name="address" id="address" class="input" required>
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-phone"></i>
					</div>
					<div class="div">
						<h5>Contact Number</h5>
						<input type="text" name="contact" id="contact" class="input" required>
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-envelope"></i>
					</div>
					<div class="div">
						<h5>Email</h5>
						<input type="email" name="email" id="email" class="input" required>
					</div>
				</div>
				<input type="submit" name="create" id="create" class="btn" value="submit">
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>