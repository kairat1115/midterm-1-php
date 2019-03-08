<?php
	require_once 'db.php';
	require_once 'functions.php';
	session_start();
	if (!$_SESSION['found']) {
		header("Location: login.php");
		die();
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
		<div class="row mx-auto">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<?php
					$tweets = getAllTweetsFromAllUsers();
					for ($i = 0; $i < sizeof($tweets); $i++) {
				?>
				<div class="card">
				  <div class="card-body">
				  	<h5 class="card-title"><?php echo $tweets[$i]['full_name'] ?></h5>
				  	<h6 class="card-subtitle mb-2 text-muted"><?php echo $tweets[$i]['post_date'] ?></h6>
				    <?php echo AbstractHTMLContents(htmlspecialchars_decode($tweets[$i]['tweet'])); ?>
				    <a href="full_tweet.php?id=<?php echo $tweets[$i]['id']; ?>" class="card-link">full text</a>
				    <?php
				    	if ($user['id'] == $tweets[$i]['user_id']) {
				    ?>
				    <a href="edit.php?id=<?php echo $tweets[$i]['id']; ?>" class="card-link">edit tweet</a>
					<?php } ?>
				  </div>
				</div>
				<?php } ?>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</body>