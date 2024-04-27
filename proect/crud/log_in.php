<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="img/logo.png" rel="icon"/>
    <title>Подключитесь</title>
</head>

<body>
    <div class="log">
        <form action="logare.php" method="POST" autocomplete="off">
            <div class="login">
                <div class="login-triangle"></div>

                <h2 class="login-header">Подключитесь к CRUD</h2>
                    <p><input type="text" placeholder="Введите Имя" name="username"></p>
                    <p><input type="password" placeholder="Введите пароль" name="pass"></p>
                    <p><input type="submit" value="Log in" name="connect"></p>

            </div>
        </form>
    </div>
</body>

</html>