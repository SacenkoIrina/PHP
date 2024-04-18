<?php
//создание файла
$file = fopen("file.txt", "w") or die("Ошибка создания файла!");
//Вводим данные в файл
fwrite($file, "1. William Smith, 1990, 2344455666677\n");
fwrite($file, "2. John Doe, 1988, 4445556666787\n");
fwrite($file, "3. Michael Brown, 1991, 7748956996777\n");
fwrite($file, "4. David Johnson, 1987, 5556667779999\n");
fwrite($file, "5. Robert Jones, 1992, 99933456678888\n");
//Закрываем файл
fclose($file);
//Открываем файл для добавления данных
$file = fopen("file.txt", "a") or die("Ошибка открытия для добавления
данных!");
if (!$file) {
 echo("Не был найден файл для добавления данных!");
} else {
 // Добавляем ещё 3 записи
fwrite($file, "6. Alexander Wilson, 1993, 8765443332221\n");
fwrite($file, "7. Christopher Lee, 1985, 3332221114444\n");
fwrite($file, "8. Matthew Taylor, 1994, 1112223334445\n");
}
fclose($file);
//Открываем файл для чтения из него
$file = fopen("file.txt", "r") or die("Ошибка открытия файла для чтения!");
if (!$file) {
 echo("Не был найден файл для чтения данных!");
} else { ?>
 <div>Данные из файла: </div>
 <?php
 while (!feof($file)) {
 echo fgets($file); ?>
 <br/>
 <?php
 }
 fclose($file);
}
