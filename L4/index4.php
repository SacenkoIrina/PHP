<!DOCTYPE html>
<html>
<head>
    <title>Тест</title>
</head>
<body>
    <h2>Тест</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Введите ваше имя:</label>
        <input type="text" id="username" name="username" required><br><br>

        <p>1. Какое из этих животных является хищником?</p>
        <input type="radio" id="lion" name="question1" value="lion">
        <label for="lion">Лев</label><br>
        <input type="radio" id="rabbit" name="question1" value="rabbit">
        <label for="rabbit">Кролик</label><br>
        <input type="radio" id="elephant" name="question1" value="elephant">
        <label for="elephant">Слон</label><br><br>

        <p>2. Какие из этих стран находятся в Европе?</p>
        <input type="checkbox" id="france" name="question2[]" value="france">
        <label for="france">Франция</label><br>
        <input type="checkbox" id="japan" name="question2[]" value="japan">
        <label for="japan">Япония</label><br>
        <input type="checkbox" id="italy" name="question2[]" value="italy">
        <label for="italy">Италия</label><br><br>

        <p>3. Какое из этих чисел является простым?</p>
        <input type="radio" id="prime1" name="question3" value="prime1">
        <label for="prime1">17</label><br>
        <input type="radio" id="prime2" name="question3" value="prime2">
        <label for="prime2">20</label><br>
        <input type="radio" id="prime3" name="question3" value="prime3">
        <label for="prime3">25</label><br><br>

        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $answers = array(
            'question1' => $_POST['question1'],
            'question2' => isset($_POST['question2']) ? $_POST['question2'] : array(),
            'question3' => $_POST['question3']
        );

        echo "<h2>Результаты теста для пользователя: $username</h2>";
        echo "<p>1. Какое из этих животных является хищником?</p>";
        echo "Ответ: " . $answers['question1'] . "<br><br>";

        echo "<p>2. Какие из этих стран находятся в Европе?</p>";
        if (!empty($answers['question2'])) {
            echo "Ответы: " . implode(", ", $answers['question2']) . "<br><br>";
        } else {
            echo "Вы не выбрали ни одного варианта. Выберите хотя бы один вариант ответа.<br><br>";
        }

        echo "<p>3. Какое из этих чисел является простым?</p>";
        echo "Ответ: " . $answers['question3'];
    }
    ?>
</body>
</html>
