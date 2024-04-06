<?php 
//1.4. Задание №4 Использование массивов и функций
$transactions = [ 
[ 
    "transaction_id" => 1, // id 
    "transaction_date" => "2019-01-01", // дата 
    "transaction_amount" => 100.00, // сумма транзакции 
    "transaction_description" => "Payment for groceries", // описание 
    "merchant_name" => "SuperMart", // название организации
],
[
    "transaction_id" => 2, 
    "transaction_date" => "2020-02-15", 
    "transaction_amount" => 75.50, 
    "transaction_description" => "Dinner with friends", 
    "merchant_name" => "Local Restaurant",
],
[
    "transaction_id" => 3, 
    "transaction_date" => "2021-03-20", 
    "transaction_amount" => 50.25, 
    "transaction_description" => "Fuel purchase", 
    "merchant_name" => "Gas Station",
],
[
    "transaction_id" => 4, 
    "transaction_date" => "2022-04-10", 
    "transaction_amount" => 200.75, 
    "transaction_description" => "Online shopping", 
    "merchant_name" => "Online Retailer",
],
[
    "transaction_id" => 5, 
    "transaction_date" => "2023-05-15", 
    "transaction_amount" => 150.00, 
    "transaction_description" => "Movie tickets", 
    "merchant_name" => "Cinema",
],
]; 
?> 
<!-- 4.1. Функция calculateTotalAmount() рассчитывает общую сумму всех транзакций. -->
<?php 
function calculateTotalAmount($transactions) {
    $totalAmount = 0;
    foreach ($transactions as $transaction) {
        $totalAmount += $transaction['transaction_amount'];
    }
    return $totalAmount;
}
//4.2. Функция calculateAverage() рассчитывает среднее арифметическое всех транзакций
function calculateAverage($transactions) {
    $totalAmount = calculateTotalAmount($transactions);
    $transactionCount = count($transactions);
    if ($transactionCount > 0) {
        return $totalAmount / $transactionCount;
    } else {
        return 0;
    }
}
//4.3. Функция mapTransactionDescriptions() возвращает новый массив, содержащий только описания транзакций.
function mapTransactionDescriptions($transactions) {
    $descriptions = array_map(function($transaction) {
        return $transaction['transaction_description'];
    }, $transactions);
    return $descriptions;
}
?> 

<table border="1"> 
<tr style="background-color: #a6a6a6; color: #252525"> 
<th colspan="5">Оценки студентов</th> 
</tr> 
<tr style="background-color: #a6a6a6; color: #252525"> 
<th>ID</th> 
<th>Дата</th> 
<th>Сумма транзакции</th> 
<th>Описание транзакции</th> 
<th>Название организации</th> 
</tr> 

<?php 
    foreach ($transactions as $transaction)  { 
?>
<!-- Выведите на экран данные о транзакциях --> 
<tr> 
<td><?php echo $transaction['transaction_id']; ?></td> 
<td><?php echo $transaction['transaction_date']; ?></td> 
<td><?php echo $transaction['transaction_amount']; ?></td> 
<td><?php echo $transaction['transaction_description']; ?></td> 
<td><?php echo $transaction['merchant_name']; ?></td> 
</tr>

<?php } ?>

</table>
<!-- Выводим функции -->
<?php
$totalAmount = calculateTotalAmount($transactions);
echo "Общая сумма всех транзакций: $totalAmount <br>";
$averageAmount = calculateAverage($transactions);
echo "Средняя сумма транзакции: $averageAmount <br>";
$descriptions = mapTransactionDescriptions($transactions);
print_r($descriptions); // вывод на экран читаемого представления переменной.
?>