<?php
	try{	
		$connection = new PDO("mysql:host=localhost;dbname=mid1", "root", "");
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	function getUserByEmailAndPassword($email, $pass) {
		global $connection;
		$query = $connection->prepare("SELECT * FROM users where email=:e and password=:p");
		$query->execute(array('e'=>$email, 'p'=>$pass));
		return $query->fetch();
	}

	function getUserByEmail($email) {
		global $connection;
		$query = $connection->prepare("SELECT * FROM users where email=:e");
		$query->execute(array('e'=>$email));
		return $query->fetch();
	}

	function addNewUser($email, $pass, $fn) {
		global $connection;
		$query = $connection->prepare("INSERT INTO users (email, password, full_name) values (:e, :p, :fn)");
		$query->execute(array('e'=>$email, 'p'=>$pass, 'fn'=>$fn));
	}

	function updateUser($id, $fn, $pass) {
		global $connection;
		$query = $connection->prepare("UPDATE users SET full_name=:fn, password=:p where id=:id");
		$query->execute(array('fn'=>$fn, 'p'=>$pass, 'id'=>$id));
	}

	function addTweet($id, $tweet) {
		global $connection;
		$query = $connection->prepare("INSERT INTO tweets (user_id, tweet) values (:id, :t)");
		$tweet = nl2br(htmlspecialchars($tweet));
		$query->execute(array('id'=>$id, 't'=>$tweet));
	}

	function updateTweet($id, $tweet) {
		global $connection;
		$query = $connection->prepare("UPDATE tweets SET tweet=:t, post_date=NOW() where id=:id");
		$tweet = nl2br(htmlspecialchars($tweet));
		$query->execute(array('id'=>$id, 't'=>$tweet));
	}

	function deleteTweet($id) {
		global $connection;
		$query = $connection->prepare("DELETE FROM tweets where id=:id");
		$query->execute(array('id'=>$id));
	}

	function getAllTweetsForUser($id) {
		global $connection;
		$query = $connection->prepare("SELECT * FROM tweets where user_id=:id order by id desc");
		$query->execute(array('id'=>$id));
		return $query->fetchAll();
	}

	function getAllTweetsFromAllUsers() {
		global $connection;
		$query = $connection->prepare("SELECT tweets.id, tweets.tweet, tweets.post_date, tweets.user_id, users.full_name FROM tweets LEFT JOIN users ON tweets.user_id = users.id order by tweets.id desc");
		$query->execute();
		return $query->fetchAll();
	}

	function getTweetById($id) {
		global $connection;
		$query = $connection->prepare("SELECT tweets.id, tweets.tweet, tweets.post_date, tweets.user_id, users.full_name FROM tweets LEFT JOIN users ON tweets.user_id = users.id where tweets.id=:id");
		$query->execute(array('id'=>$id));
		return $query->fetch();
	}

	function getAllTweetsAfterId($id) {
		global $connection;
		$query = $connection->prepare("SELECT tweets.id, tweets.tweet, tweets.post_date, tweets.user_id, users.full_name FROM tweets LEFT JOIN users ON tweets.user_id = users.id where tweets.id>:id");
		$query->execute(array('id'=>$id));
		return $query->fetchAll();
	}
?>