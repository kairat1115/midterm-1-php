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
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['editordata'])) {
			addTweet($user['id'], $_POST['editordata']);
		}
		header("Location: home.php");
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
				<div class="container">
					<div class="row mx-auto">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title text-center">Greetings, <?php echo $user['full_name'] ?></h5>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<h5 class="card-title text-center">Add tweet</h5>
									<form method="post">
										<textarea id="summernote" name="editordata"></textarea>
										<button type="submit" class="btn btn-primary">ADD</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title text-center">Your tweets</h5>
									<?php
										$tweets = getAllTweetsForUser($user['id']);
										for ($i = 0; $i < sizeof($tweets); $i++) {
									?>
									<div class="card">
									  <div class="card-body">
									  	<h5 class="card-title"><?php echo $user['full_name'] ?></h5>
									  	<h6 class="card-subtitle mb-2 text-muted"><?php echo $tweets[$i]['post_date'] ?></h6>
									    <?php echo AbstractHTMLContents(htmlspecialchars_decode($tweets[$i]['tweet'])); ?>
									    <a href="full_tweet.php?id=<?php echo $tweets[$i]['id']; ?>" class="card-link">full text</a>
									    <a href="edit.php?id=<?php echo $tweets[$i]['id']; ?>" class="card-link">edit tweet</a>
									  </div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
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