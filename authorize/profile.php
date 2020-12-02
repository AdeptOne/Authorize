<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<p> <?= $_SESSION['user']['ID'] ?></p>
	<p> <?= $_SESSION['user']['login'] ?></p>
	<p> <?= $_SESSION['user']['email'] ?></p>
	<a class="btn" href="index.html">Выход</a>
</body>
</html>