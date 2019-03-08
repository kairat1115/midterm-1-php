<?php
	require_once 'db.php';
	session_start();
	if (!isset($_SESSION) || !$_SESSION['found']) {
	  header("Location: login.php");
	  die();
	}
	setcookie('creds', '', time()-1);
	session_destroy();
	header("Location: login.php");
?>