<?php
session_start();

if (isset($_POST['submit'])) 
	{				
		if ($_POST['login']=='admin' && $_POST['password']=='admin' ) { $_SESSION['key']='YES'; }
		else { $_SESSION['key']='NO'; }

		if 	($_SESSION['key']=='YES') { header( "Location: index.php" ); }
		else {
			echo '<script language="javascript">';
			echo 'alert("Неверная пара логин-пароль")';
			echo '</script>';
		}
}

include_once 'header.php';
?>
		<div class="login">
			<div class="form">
				<form action="login.php" method="POST">
					<h1>Пожалуйста,<br>войдите в систему</h1>
					<p>Имя пользователя:</p>
					<input type="text" name="login" placeholder="Имя пользователя">
					<p>Пароль:</p>
					<input type="password" name="password" placeholder="пароль">
					<input name="submit" type="submit" value="Войти">
				</form>
			</div>
		</div>


