<?php
	require_once 'db.php';
	session_start();
	if (!$_SESSION['found']) {
		header("Location: login.php");
		die();
	}
	if ($_SERVER['REQUEST_METHOD'] != 'GET' && !isset($_GET['id']) && !is_numeric($_GET['id'])) {
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}
	$email = $_SESSION['email'];
	$pass = $_SESSION['pass'];
	$user = getUserByEmailAndPassword($email, $pass);
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
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8 mx-auto">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">
							<?php
								$tweet = getTweetById($_GET['id']);
							?>
							<div class="card">
							  <div class="card-body">
							  	<h5 class="card-title"><?php echo $tweet['full_name'] ?></h5>
							  	<h6 class="card-subtitle mb-2 text-muted"><?php echo $tweet['post_date'] ?></h6>
							    <?php echo htmlspecialchars_decode($tweet['tweet']); ?>
							    <?php
							    	if ($user['id'] == $tweet['user_id']) {
							    ?>
							    <a href="edit.php?id=<?php echo $tweet['id']; ?>" class="card-link">edit tweet</a>
								<?php } ?>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>