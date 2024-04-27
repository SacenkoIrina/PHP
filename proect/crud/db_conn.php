<?php
$hostname="localhost";
$username="root";
$password="";
$database="pet_shop";
$conexiune=mysqli_connect($hostname, $username, $password) or die ("Нет подключения к БД");
mysqli_select_db($conexiune, $database) or die ("Не находится БД");
?>