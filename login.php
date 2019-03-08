<?php
	require_once 'db.php';
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['email']) && isset($_POST['password'])) {
			setcookie('creds', base64_encode($_POST['email'].':'.$_POST['password']), time() + 3600);
		}
		header('Location: login.php');
		die();
	}
	if (!isset($_COOKIE['creds'])) {
		$empty_cred = ':';
		setcookie('creds', base64_encode($empty_cred), time() + 3600);
		header('Location: login.php');
		die();
	}
	try {
		$data = $_COOKIE['creds'];
		$creds = base64_decode($data);
		$creds = preg_split("/:/", $creds, 2);
		$email = $creds[0];
		$pass = $creds[1];
	} catch (Exception $e) {
		$email = '';
		$pass = '';
	}
	if (getUserByEmailAndPassword($email, $pass)) {
		$_SESSION['email'] = $email;
		$_SESSION['pass'] = $pass;
		$_SESSION['found'] = true;
		header('Location: index.php');
		die();
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
						<h5 class="card-title text-center">Sign In Account</h5>
						<form method="post">
							<div class="form-group">
								<label for="inputEmail">Email address</label>
								<input type="text" name="email" class="form-control" placeholder="Email address">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary">SIGN IN</button>
							<a href="register.php" class="btn btn-secondary">REGISTER</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</body>