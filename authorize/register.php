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
	<form class="form" action="include/signup.php" method="POST">
		<label class="form__label">Логин</label>
		<input class="form__input" type="text" name="login" placeholder="Введите свой логин">
		<label class="form__label">Почта</label>
		<input class="form__input" type="email" name="email" placeholder="Введите свою почту">
		<label class="form__label">Пароль</label>
		<input class="form__input" type="password" name="password" placeholder="Введите свой пароль">
		<label class="form__label">Подтверждение пароля</label>
		<input class="form__input" type="password" name="password_confirm" placeholder="Подтвердите пароль">
		<button class="btn" type="submit">Зарегистрироваться</button>
		<p class="form__text">У вас уже есть аккаунт? - <a class="form__link" href="index.php">Авторизация</a></p>
		<?php 
			if ($_SESSION['message']) {
				echo '<p class="form__msg"> ' . $_SESSION['message'] .' </p>';
			}
			unset($_SESSION['message']);
		?> 
	</form>
</body>
</html>