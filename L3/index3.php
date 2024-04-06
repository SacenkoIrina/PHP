<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
    nav {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            border: 1px solid #000; /* Добавляем рамку */
            padding: 10px; /* Добавляем внутренний отступ для контента */
            background-color: #bf77f6;
        }

        nav a {
            margin-right: 20px;
            text-decoration: none;
            color: white;
        }

        header {
            text-align: center; /* Центрируем содержимое заголовка */
            margin-bottom: 20px; /* Добавляем отступ снизу */
        }
        footer{
            text-align: center;
            background-color: #bf77f6;
            color: white;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 960px; /* Максимальная ширина галереи */
            margin: 0 auto; /* Центрирование галереи */
        }
        .gallery img {
            width: 200px; /* Вычисляем ширину так, чтобы 3 изображения поместились в ряд с учетом отступов */
            height: 200px; /* Задаем фиксированную высоту для каждой картинки */
            object-fit: cover; /* Сохраняем пропорции и обрезаем изображения для сохранения высоты */
            margin-bottom: 20px; /* Отступ между картинками */
        }
    </style>
</head>
<body>
    <header>
        <h1>Моя галерея изображений</h1>
    </header>
    
    <nav>
    <a href="#">Главная</a>
        <a href="#">О цветах</a>
        <a href="#">Контакты</a>
    </nav>

    <main>
        <section class="gallery">
        <?php
//  путь к папке с изображениями
$dir = './image'; 
// Получение списка файлов и каталогов в указанной директории
$files = scandir($dir); 
// Проверка, успешно ли получен список файлов и каталогов
if ($files !== false) { 
    // Проход по каждому элементу списка
    for ($i = 0; $i < count($files); $i++) { 
        // Пропускаем текущий каталог и родительский
        if (($files[$i] != ".") && ($files[$i] != "..")) { 
            // Формируем полный путь к файлу изображения
            $path = $dir . "/" . $files[$i]; 
            // Выводим изображение
            echo "<a href='$path'><img src='$path' alt='Image' /></a>"; 
        }
    }
}
?>
        </section>
    </main>

    <footer>
        <p><b >&copy; 2024 Моя галерея изображений</b></p>
    </footer>
</body>
</html>