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
			<div class="col-sm-8" id="feed">
				
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
	<script type="text/javascript">
		var id = '0';
		setInterval(function() {
			$.get("get_new.php?id="+id, function (json) {
				json = JSON.parse(json);
				if (json.length > 0) {
					id = json[json.length-1].id;
					console.log(json);
					for (var i = 0; i < json.length; i++) {
						var text = `<div class="card">\
							\t<div class="card-body">\
							\t\t<h5 class="card-title">${json[i].full_name}</h5>\
							\t\t<h6 class="card-subtitle mb-2 text-muted">${json[i].post_date}</h6>\
							\t\t${json[i].tweet}\
							\t\t<a href="full_tweet.php?id=${json[i].id}" class="card-link">full text</a>`;
						if (json[i].user_id == "<?php echo $user['id'] ?>") {
							text += `\t\t<a href="edit.php?id=${json[i].id}" class="card-link">edit tweet</a>`
						}
						text += `\t</div>\
						</div>`;
						$("#feed").prepend(text);
					}
				}
			});
		}, 1000);
	</script>
</body>