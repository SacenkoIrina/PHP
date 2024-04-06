<?php
//операторы echo и print используются для вывода значений на экран.
echo "Период отпусков закончился! <br />";
print "Период отпусков закончился! <br />";
//определение переменной через $.
$x = 288;
$y = "Все возвращаются на работу!";
//в {} выводятся значения x, y.
echo "B {$x} день, приблизительно ... {$y}";
//1 операнд br (перенос на другую строку) после "." 2 операнд. 1 не будет работать без 2 и наоборот.
echo "<br />" . 45 + 67;
echo "<br />" . "45" + "67";
echo "<br />" . "45 + 67";
echo "<br />" . '45 + 67';
//многострочная строка, которая позволяет выводить значения без необходимости вставлять специальные символы.
$a = <<<EOF
    Книга “Герой” выйдет в октябре, этого года! Используйте 
    правильно кавычки!
    EOF;
echo "<br /> $a";
//можно вывести иначе.
echo '<br /> Книга "Герой" выйдет в октябре, этого года!';
echo "<br /> Книга \"Герой\" выйдет в октябре, этого года!";
//выводим стихотворение через многострочную строку , heredoc.
$poem = <<<EOT
<br><br><b>Ночь, улица, фонарь, аптека…</b><br><br>
Ночь, улица, фонарь, аптека,<br>
Бессмысленный и тусклый свет.<br>
Живи ещё хоть четверть века —<br>
Всё будет так. Исхода нет.<br><br>

Умрёшь — начнёшь опять сначала<br>
И повторится всё, как встарь:<br>
Ночь, ледяная рябь канала,<br>
Аптека, улица, фонарь.<br>
<div style="margin-left: 150px"><i><b>А. А. Блок</b></i></div>
EOT;
// Вывод стиха
echo $poem;