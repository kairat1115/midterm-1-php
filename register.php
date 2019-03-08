<?php
	require_once 'db.php';
	session_start();
	if (isset($_SESSION['found']) && $_SESSION['found']) {
		header("Location: index.php");
		die();
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['fullname'])) {
			$email = $_POST['email'];
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			$pass = $_POST['password'];
			$fn = $_POST['fullname'];
			if (getUserByEmail($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: register.php");
				die();
			}
			addNewUser($email, $pass, $fn);
		}
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row mx-auto">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Register account</h5>
						<form method="post">
							<div class="form-group">
								<label for="inputEmail">Email address</label>
								<input type="text" name="email" class="form-control" placeholder="Email address">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="inputFullName">Full Name</label>
								<input type="text" name="fullname" class="form-control" placeholder="Full Name">
							</div>
							<button type="submit" class="btn btn-primary">REGISTER</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</body>