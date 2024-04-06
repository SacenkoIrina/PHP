<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Пример формы для продуктов</title>
<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    label {
        margin-bottom: 10px;
    }
    .message {
        display: none;
        color: green;
        margin-top: 10px;
    }
</style>
</head>
<body>

<form id="productForm">
<div id="main_info" style="display: flex; flex-direction: 
column; gap: 10px;"> 
    <label for="productName">Название продукта:</label>
    <input type="text" id="productName" name="productName" required>

    <label for="productDescription">Описание продукта:</label>
    <textarea id="productDescription" name="productDescription" rows="4" required></textarea>

    <label for="productPrice">Цена продукта:</label>
    <input type="number" id="productPrice" name="productPrice" min="0" step="0.01" required>

    <label for="productCategory">Категория продукта:</label>
    <select id="productCategory" name="productCategory" required>
        <option value="">Выберите категорию</option>
        <option value="fruits">Фрукты</option>
        <option value="vegetables">Овощи</option>
        <option value="dairy">Молочные продукты</option>
        <option value="meat">Мясо и птица</option>
    </select>

    <button type="submit">Добавить продукт</button>
</div>
</form>

<div class="message" id="successMessage">Продукт успешно добавлен!</div>

<script>
    document.getElementById("productForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevents the default form submission
        
        // Here you can add code to handle form submission, like sending data to a server
        
        // Show success message
        document.getElementById("successMessage").style.display = "block";
        
        // Reset form
        document.getElementById("productForm").reset();
    });
</script>

</body>
</html>
