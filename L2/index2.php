<?php
    $nume = 'Иванов'; 
    $prenume = 'Николай'; 
    echo 'Фамилия клиента '.$nume. ', а его имя ' 
    .$prenume . '.'; 
    $varsta = 30; 
    print '<br />Возраст клиента ' .$varsta .'.'; 

    $d = date("D"); 
    echo ($d == "Fri") ? "<br />Хороших вам выходных!" : "<br />Приятного рабочего дня, вам!";

    $dayOfWeek = date("N"); // Получаем номер текущего дня недели (1 - понедельник, 2 - вторник, и т.д.)
    switch ($dayOfWeek) {
        case 1:
            $dayName = "понедельник";
            break;
        case 2:
            $dayName = "вторник";
            break;
        case 3:
            $dayName = "среда";
            break;
        case 4:
            $dayName = "четверг";
            break;
        case 5:
            $dayName = "пятница";
            break;
        case 6:
            $dayName = "суббота";
            break;
        case 7:
            $dayName = "воскресенье";
            break;
        default:
            $dayName = "ошибка";
            break;
    }
    echo "<br>Сегодня, $dayName," . date("d.m.y");
?>
