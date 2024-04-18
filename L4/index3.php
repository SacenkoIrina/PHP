<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заголовок с названием</title>
    <style>
        /* Example styles for the header */
        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
        .nav-buttons {
            display: flex;
        }
        .nav-buttons button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<header>
    <h3>#my-shop</h3>
    <div class="nav-buttons">
        <button>Home</button>
        <button>Comments</button>
    </div>
    <button>Exit</button>
</header>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST"> 
<fieldset> 
<legend>#write-comment</legend> 
<h1>#write-comment</h1>
<div id="main_info" style="display: flex; flex-direction: column; gap: 10px;">
    <div>
        <label for="name">Name: 
            <input type="text" name="name"/>
        </label>
    </div>
    <div>
        <label for="email">Email: 
            <input type="email" name="email"/>
        </label>
    </div>
</div>
<div id="message_info">
    <div>
        <p><label for="comment">Comment: </label></p>
        <textarea id="comment" name="comment" cols="30" rows="10" class="comment"></textarea>
    </div>
</div>
<div>
    <input type="checkbox" id="agree" name="agree">
    <label for="agree">Do you agree with data processing?</label>
</div>
<button type="submit">Send</button>
</fieldset> 
</form> 

<?php
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, что все необходимые поля заполнены
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']) && isset($_POST['agree'])) {
        // Получаем данные из формы
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        // Если все в порядке, выводим комментарий
        echo "<div style='margin-top: 20px;'>";
        echo "<h2>Ваш комментарий:</h2>";
        echo "<p><strong>Имя:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Комментарий:</strong> $comment</p>";
        echo "</div>";
    } else {
        // Если какие-то поля не заполнены, выводим сообщение об ошибке
        echo "<p style='color: red;'>Пожалуйста, заполните все поля формы.</p>";
    }
}
?>

</body>
</html>
