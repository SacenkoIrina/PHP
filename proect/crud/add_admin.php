<?php
// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectare la baza de date (înlocuiți cu informațiile dvs. de conectare)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pet_shop";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Verifică conexiunea la baza de date
    if ($conn->connect_error) {
        die("Неудачное соединение: " . $conn->connect_error);
    }
    
    // Preia datele din formular
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    
    // Validează și pregătește datele pentru interogare
    $username = mysqli_real_escape_string($conn, $username);
    $pass = mysqli_real_escape_string($conn, $pass);
    
    // Verifică dacă utilizatorul există deja în baza de date
    $sql_check = "SELECT * FROM users WHERE username = '$username'";
    $result_check = $conn->query($sql_check);
    
    if ($result_check->num_rows > 0) {
        echo "Пользователь уже существует в базе данных.";
    } else {
        // Criptează parola (opțional, dar recomandat)
        $hashedPassword = crypt($pass, "salt");
        
        // Construiește și execută interogarea SQL pentru inserarea utilizatorului nou
        $sql_insert = "INSERT INTO users (username, pass) VALUES ('$username', '$hashedPassword')";
        
        if ($conn->query($sql_insert) === TRUE) {
            echo "Пользователь успешно зарегистрирован.";
        } else {
            echo "Ошибка регистрации пользователя: " . $conn->error;
        }
    }
    
    // Închide conexiunea la baza de date
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать аккаунт</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form_login {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .submit {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container form_login">
    <h2>Создать аккаунт</h2>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="username">
            User Name
            <input type="text" name="username" required placeholder="User Name" class="form_login">
        </label>
        <label for="password">
            User Password
            <input type="password" name="pass" required placeholder="User Password" class="form_login">
        </label>
        <input name="submit" type="submit" value="Create" class="submit">
        <a    name="submit" href="log_in.php">Вход в систему</a>

    </form>
</div>

</body>
</html>

