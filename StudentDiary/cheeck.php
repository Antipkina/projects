<?php
		include_once('config.php');
		include_once('db.php');
?>
<html>
<head>
</head>

<body>

<?php	
	$login = '';
	$email = '';
	$fio = '';
	$about ='';
	$errors ='';
	
	if(isset($_POST['sub']))
	{
		$login = htmlspecialchars($_POST['login']);
		$email = htmlspecialchars($_POST['email']);
		$fio = htmlspecialchars($_POST['fio']);
		$about = htmlspecialchars($_POST['about']);
		$pass = htmlspecialchars($_POST['pass']);
		$pass2 = htmlspecialchars($_POST['pass2']);
		
		db :: getInstance();
		
		if(empty($login))
			$errors .= "Логин не может быть пустым <br />";
		
		if(empty($pass) || empty($pass2))
			$errors .= "Пароль не может быть пустым <br />";
		
		if($pass != $pass2)
			$errors .= "Пароли не совпадают <br />";
		
		if(empty($errors))	
		{
			$sql = "SELECT * from users Where login ='$login'";

			$result = db :: query($sql);
			
			if($result && (($row = mysql_fetch_array(db::query($sql))) != false))
				$errors .= "Такой пользователь уже существует <br />";
		}
		
		
		if(empty($errors))	
		{
			$sql = 			"INSERT INTO `db_lab1`.`users` (`login`, `email`, `fio`, `about`, `pass`) 
					VALUES ('$login', '$email', '$fio', '$about', MD5($pass));";

			 db :: query($sql);
			 
			 echo "Вы успешно зарегестрированны!";
			
			
		}
	}
?>
			
	<h1> Регистрация </h1>		
	<div class ='errors'> <?=$errors ?> </div>
	
	<form action = 'cheeck.php' method ='post'>
		<table>
			<tr>
					<td> Логин</td>
					<td> <input type ='text' name = 'login' value = '<?=$login?>'></td>
			</tr>
			<tr>
					<td>E-mail </td>
					<td>  <input type ='email' name = 'email' value = '<?=$email?>'> </td>
			</tr>
			<tr>
					<td>ФИО </td>
					<td>  <input type ='text' name = 'fio' value = '<?=$fio?>'> </td>
			</tr>
			<tr>
					<td>О себе </td>
					<td><textarea name = 'about'><?=$about?></textarea> </td>
			</tr>
			<tr>
					<td>Пароль </td>
					<td>  <input type ='password' name = 'pass' value = ''> </td>
			</tr>
			<tr>
					<td>Пароль (повтор) </td>
					<td>  <input type ='password' name = 'pass2' value = ''> </td>
			</tr>
				<tr>
					<td>  <input type ='submit' name = 'sub' value = 'Зарегестрироваться'> </td>
			</tr>
		</table>
		
		<br>
		<a href =' http://localhost/sibirkin/'> Вернуться на главную</a>
		</form>
		</body>
		</html>
		