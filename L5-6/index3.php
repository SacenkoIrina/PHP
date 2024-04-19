<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Форма обратной связи</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    form label {
        display: block;
        margin-bottom: 10px;
    }
    form textarea {
        width: 100%;
        padding: 5px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }
    form input[type="text"],
    form input[type="number"],
    form input[type="submit"],
    form input[type="reset"] {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    form input[type="submit"],
    form input[type="reset"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
    form input[type="submit"]:hover,
    form input[type="reset"]:hover {
        background-color: #45a049;
    }
    .message-container {
        max-width: 600px;
        margin: 20px auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
</style>
</head>
<body>

<?php if (!isset($_REQUEST['start'])) { ?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <div>
    <label>Ваше имя: <input name="name" type="text" size="30"></label>
    </div>
    <div>
    <label>Email: <input name="email" type="text" size="30"></label>
    </div>
    <div>
    <label>Возраст: <input name="age" type="number" min="0" max="150"></label>
    </div>
    <div>
    <label>Ваше мнение о нас напишите тут:
    <textarea name="message" cols="40" rows="4" placeholder="Ваше
    мнение..."></textarea>
    </label>
    </div>
    <div>
    <input type="reset" value="Стереть"/>
    <input type="submit" value="Передать" name="start"/>
    </div>
</form>
<?php } else {
 // Данные с формы
    $data = [
    'name' => $_POST['name'] ?? "",
    'email' => $_POST['email'] ?? "",
    'age' => $_POST['age'] ?? "",
    'message' => $_POST['message'] ?? "",
    ];
 // Проверка на ввод корректного email
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        die("Некорректный email!");
    }
 // Сохранение данных в файл
    $file = fopen('messages.txt', 'a+') or die("Недоступный файл!");
    foreach ($data as $field => $value) {
        fwrite($file, "$field: $value\n");
    }
    fwrite($file, "\n");
    fclose($file);
 // Вывод данных на экран
    echo '<div class="message-container">Данные были сохранены! Вот что хранится в файле: <br />';
    $file = fopen("messages.txt", "r") or die("Недоступный файл!");
    while (!feof($file)) {
        echo fgets($file) . "<br />";
    }
    fclose($file);
    echo '</div>';
    } ?>

</body>
</html>
