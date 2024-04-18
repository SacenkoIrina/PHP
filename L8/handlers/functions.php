<?php

function validateCommentData($name, $comment) {
    $errors = array();

    // Проверка наличия обязательных полей
    if (empty($name)) {
        $errors[] = "Заполните все поля.";
    }

    if (empty($comment)) {
        $errors[] = "Заполните все поля.";
    }

    // Проверка минимальной длины комментария (например, 10 символов)
    if (strlen($comment) < 10) {
        $errors[] = "Комментарий должен быть длиной не менее 10 символов.";
    }

    return $errors;
}

?>
