<?php
require_once('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    // Проверка данных формы перед сохранением
    $errors = validateCommentData($name, $comment);

    if (empty($errors)) {
        // Сохранение данных в файл
        $file = fopen("comments.txt", "a");
        fwrite($file, "Name: $name\nComment: $comment\n\n");
        fclose($file);

        // Перенаправление пользователя после успешной отправки формы
        header("Location: ../index.php");
    } else {
        // Вывод сообщений об ошибках, если они есть
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
