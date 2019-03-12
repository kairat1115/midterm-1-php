<?php
	if (isset($_GET['id']) && is_numeric($_GET['id'])) {
		require_once 'db.php';
		require_once 'functions.php';
		session_start();
		if (!$_SESSION['found']) {
			header("Location: login.php");
			die();
		}
		$tweets = getAllTweetsAfterId($_GET['id']);
		for ($i = 0; $i < sizeof($tweets); $i++) {
			$tweets[$i]['tweet'] = AbstractHTMLContents(htmlspecialchars_decode($tweets[$i]['tweet']));
		}
		echo json_encode($tweets);
	}
?>