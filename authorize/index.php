<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>authorize</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<form class="form" action="include/signin.php" method="POST">
		<label class="form__label">Логин</label>
		<input class="form__input" type="text" name="login" placeholder="Введите логин">
		<label class="form__label">Пароль</label>
		<input class="form__input" type="password" name="password" placeholder="Введите пароль">
		<button class="btn" type="submit">Войти</button>
		<p class="form__text">Хотите зарегистрировать аккаунт? - <a class="form__link" href="register.php">Регистрация</a></p>
		<?php 
			if ($_SESSION['message']) {
				echo '<p class="form__msg"> ' . $_SESSION['message'] .' </p>';
			}
			unset($_SESSION['message']);
		?>
	</form>
</body>
</html>