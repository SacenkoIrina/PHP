<?php
// Создание и запись начальных данных в файл
$data = "1. William Smith, 1990, 2344455666677\n";
$data .= "2. John Doe, 1988, 4445556666787\n";
$data .= "3. Michael Brown, 1991, 7748956996777\n";
$data .= "4. David Johnson, 1987, 5556667779999\n";
$data .= "5. Robert Jones, 1992, 99933456678888\n";

file_put_contents("file2.txt", $data) or die("Ошибка создания файла!");

// Добавление еще 3 записей в файл
$additional_data = "6. Christopher Lee, 1985, 8887776665544\n";
$additional_data .= "7. Matthew Taylor, 1995, 6677889994455\n";
$additional_data .= "8. Daniel Martinez, 1989, 5566778899333\n";

file_put_contents("file2.txt", $additional_data, FILE_APPEND) or die("Ошибка добавления данных в файл!");

// Открытие файла для чтения
$file = fopen("file2.txt", "r") or die("Ошибка открытия файла для чтения!");

// Вывод данных из файла
echo "<div>Данные из файла:</div>";
while (!feof($file)) {
    echo fgets($file) . "<br/>";
}
fclose($file);
?>
