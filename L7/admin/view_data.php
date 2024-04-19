<?php 
    require 'config.php';
    session_start(); 
    if(!$_SESSION['user']) { 
        header('Location: http://'.$_SERVER['SERVER_NAME'].$path.'/');
    }   
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezervare</title>
    <link rel="icon" href="../images/icon.png" />
    <link rel="stylesheet" href="../css/styles.css" />
    <script src="https://kit.fontawesome.com/9c1aa2dd0d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="link">
            <a href="logout.php" class="navbar"> Выход </a>
	</div>
    <div class="myData">
        <h1>Данные, хранящиеся в файле, о выполненных заказах</h1>
        <table>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Номер телефона</th>
                <th>Email</th>
                <th>Дата входа</th>
                <th>Дата выхода</th>
                <th>Количество чел.</th>
                <th>Тип комнаты</th>
                <th>Замечания</th>
            </tr>
            <?php
                $myData=fopen("data/dateRezervari.txt", "r")or die("Файл не найден!");
                while(!feof($myData))
                {
                    echo "<tr>";
                    $record=trim(fgets($myData));
                    $row = explode("\t", $record);
                    foreach($row as $item){
                        echo "<td>".$item."</td>";
                    }
                    echo "</tr>";
                }
                fclose($myData);
            ?>
        </table>
    </div> 
</body>
</html>