<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>График работы докторов</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
            /* Центрирование заголовка таблицы */
        }

        h2 {
            text-align: center;
            /* Центрирование заголовка */
        }
    </style>
</head>

<body>
    <?php
    // Создаем массивы с 2 значениями для каждого доктора 
    $doctor1 = array("Аксенти Елена Андреевна", "8:00-12:00");
    $doctor2 = array("Петрова Мария Ивановна", "12:00-16:00");

    // Создаем ассоциативный массив с днями недели (число - ключ, 'значение')
    $Week = array(
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресенье',
    );
?>
    // Выводим заголовок таблицы
    <h2>График работы докторов, каб.333</h2>;
    echo "<table>";
    echo "<tr><th>День недели</th><th>Доктор</th><th>Часы работы</th></tr>";
<?php
    // Получаем текущий день недели 
    $currentDayOfWeek = date('N');

    // Выводим данные для текущего и следующих 7 дней
    for ($i = 0; $i < 7; $i++) {
        $dayOfWeek = ($currentDayOfWeek + $i - 1) % 7 + 1; // Получаем номер дня недели в пределах 1-7
        $dayName = $Week[$dayOfWeek];

        // Выводим строку таблицы с данными о дне и докторах
        echo "<tr>";
        echo "<td rowspan='2'>$dayName</td>";
        
        // Проверяем, является ли текущий день недели нерабочим для доктора Аксенти Елена Андреевна
        if ($dayOfWeek == 2 || $dayOfWeek == 4 || $dayOfWeek == 6 || $dayOfWeek == 7) {
            echo "<td>{$doctor1[0]}</td>"; // Ф.И.О. первого доктора
            echo "<td><b>Нерабочий день</b></td>"; // Нерабочий день для первого доктора
        } else {
            echo "<td>{$doctor1[0]}</td>"; // Ф.И.О. первого доктора
            echo "<td>{$doctor1[1]}</td>"; // Часы работы первого доктора
        }
        echo "</tr>";

        echo "<tr>";
        // Проверяем, является ли текущий день недели нерабочим для доктора Петрова Мария Ивановна
        if ($dayOfWeek == 1 || $dayOfWeek == 3 || $dayOfWeek == 5 || $dayOfWeek == 7) {
            echo "<td>{$doctor2[0]}</td>"; // Ф.И.О. второго доктора
            echo "<td><b>Нерабочий день</b></td>"; // Нерабочий день для второго доктора
        } else {
            echo "<td>{$doctor2[0]}</td>"; // Ф.И.О. второго доктора
            echo "<td>{$doctor2[1]}</td>"; // Часы работы второго доктора
        }
        echo "</tr>";
    }

    // Закрываем таблицу
    echo "</table>";
    ?>

</body>

</html>
