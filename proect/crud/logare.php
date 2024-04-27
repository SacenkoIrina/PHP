<?php
session_start();

require 'db_conn.php';

if (isset($_POST["connect"])) {
    if (isset($conexiune)) {
        // Verifică conexiunea la baza de date
        if ($conexiune->connect_error) {
            die("Conexiune eșuată: " . $conexiune->connect_error);
        }
        // Preia datele din formular
        $username = $_POST["username"];
        $pass = $_POST["pass"];

        // Validează și pregătește datele pentru interogare
        $username = mysqli_real_escape_string($conexiune, $username);
        $pass = mysqli_real_escape_string($conexiune, $pass);

        // Verifică dacă utilizatorul există în baza de date
        $sql_check = "SELECT * FROM users WHERE username = '$username'";
        $result_check = $conexiune->query($sql_check);

        if ($result_check->num_rows > 0) {
            // Utilizatorul există, verifică parola
            $row = $result_check->fetch_assoc();
            if (password_verify($pass, $row["pass"])) {
                // Parola este corectă, autentificare cu succes
                $_SESSION['username'] = $row['username'];
                setcookie('username', $row['username'], time() + 1200, "/");
                header("Location:home.php");
            } else {
                // Parola este incorectă
                echo "Неверный пароль!";
            }
        } else {
            // Utilizatorul nu există în baza de date
            echo "Пользователь не существует.";
        }

        // Închide conexiunea la baza de date
        $conexiune->close();
    }


}
