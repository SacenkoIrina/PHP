<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

form {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    border: none;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="register.php" method="post">
        <label for="login">Login:</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Register">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, что все поля заполнены
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = md5($_POST['password']); // Хешируем пароль

        // Сохраняем данные пользователя в файл
        $userData = "$login:$password\n";
        file_put_contents('users.txt', $userData, FILE_APPEND);

        // Успешная регистрация
        http_response_code(201); // Отправляем HTTP-код 201 (Created)
        echo "Registration successful!";
    } else {
        // Если не все поля заполнены
        http_response_code(400); // Отправляем HTTP-код 400 (Bad Request)
        echo "All fields are required!";
    }
} else {
    // Если форма не отправлена методом POST
    http_response_code(405); // Отправляем HTTP-код 405 (Method Not Allowed)
    
}
?>



</body>
</html>
