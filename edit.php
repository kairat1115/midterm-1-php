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
	$tweet = null;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['editordata']) && isset($_POST['action']) && isset($_POST['id'])) {
			$tweet = getTweetById($_POST['id']);
			if ($user['id'] == $tweet['user_id']) {
				if ($_POST['action'] == 'SAVE') {
					updateTweet($tweet['id'], $_POST['editordata']);
				} else if ($_POST['action'] == 'DELETE') {
					deleteTweet($tweet['id']);
				}
			}
		}
		header("Location: home.php");
	}
	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		$f = true;
		if (isset($_GET['id'])) {
			$tweet = getTweetById($_GET['id']);
			if ($user['id'] == $tweet['user_id']) {
				$f = false;
			}
		}
		if ($f == true) {
			header("Location: index.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/summernote-bs4.js"></script>
</head>
<body>
	<?php require_once 'header.php' ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Edit tweet</h5>
						<form method="post">
							<textarea id="summernote" name="editordata"><?php echo htmlspecialchars_decode($tweet['tweet']); ?></textarea>
							<input type="hidden" name="id" value="<?php echo $tweet['id'] ?>">
							<input type="submit" name="action" class="btn btn-primary" value="SAVE">
							<input type="submit" name="action" class="btn btn-danger" value="DELETE">
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
	<script>
      $('#summernote').summernote({
        placeholder: 'Give some ideas',
        tabsize: 2,
        height: 100
      });
    </script>
</body>