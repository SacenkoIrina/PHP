<?php
	session_start(); 
	require 'config.php';
	if (isset($_REQUEST['ok'])) {
	if ((isset($_POST["login"]))and(!empty($_POST['login']))and(isset($_POST["pass"]))and(!empty($_POST['pass']))) {
		$password=$_POST["pass"];
		$login=$_POST["login"];
		$log=fopen("data/accounts.txt", "r")or die("Файл не найден!");
		$exist=false;
		while(!feof($log))
		{
		$extras=trim(fgets($log));
		$date_cont = explode(" ", $extras);
		if(($date_cont[0] == $login) and ($date_cont[1]==md5($password))) {$exist=true;}
		}
		fclose($log);
		if ($exist==true){
			$_SESSION['user'] = $login;
			header('Location: http://'.$_SERVER['SERVER_NAME'].$path.'/view_data.php');
		} else {
			header('Location: http://'.$_SERVER['SERVER_NAME'].$path.'/');}		
		}
		}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezervare</title>
    <link rel="icon" href="../images/icon.png" />
    <link rel="stylesheet" href="../css/styles.css" />
    <script src="https://kit.fontawesome.com/9c1aa2dd0d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="link">
            <a href="signUp.php" class="navbar">Регистрация</a>
	</div>    
    <div class="myForm">
        <h1>Что бы получить доступ к данным, войдите в аккаунт !!!</h1>
        <form method="POST" autocomplete="off" action="<?php $_SERVER['SCRIPT_NAME']?>">
            <div class="signIn">
                <input type="text" placeholder="Log-in" name="login" />
                <input type="password" placeholder="Parola" name="pass" size="12" maxlength="10" class="half" /><br /> 
                <input type="submit" value="Acces" name="ok" />
            </div>
        </form>
    </div> 
</body>
</html>