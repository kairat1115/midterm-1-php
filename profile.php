<?php
	require_once 'db.php';
	session_start();
	if (!$_SESSION['found']) {
		header("Location: login.php");
		die();
	}
	$email = $_SESSION['email'];
	$pass = $_SESSION['pass'];
	$user = getUserByEmailAndPassword($email, $pass);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['fullname']) && isset($_POST['password'])) {
			updateUser($user['id'], $_POST['fullname'], $_POST['password']);
			setcookie('creds', base64_encode($user['email'].':'.$_POST['password']), time() + 3600);
			$_SESSION['pass'] = $_POST['password'];
		}
		header('Location: index.php');
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
	<?php require_once 'header.php' ?>
	<div class="container">
		<div class="row mx-auto">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Greetings, <?php echo $user['full_name'] ?></h5>
						<form method="post">
							<div class="form-group">
								<label for="inputFullName">Full Name</label>
								<input type="text" name="fullname" class="form-control" placeholder="Full Name" value="<?php echo $user['full_name'] ?>">
							</div>
							<div class="form-group">
								<label for="inputPassword">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $user['password'] ?>">
							</div>
							<button type="submit" class="btn btn-primary">SAVE</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</body>