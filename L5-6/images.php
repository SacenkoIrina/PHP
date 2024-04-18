<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Галерея изображений</title>
  <link rel="stylesheet" href="style.css">
  <style>/* Сброс стилей */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Общие стили */
body {
  font-family: sans-serif;
  font-size: 16px;
  color: #333;
}

/* Хедер */
header {
  background-color: #000;
  color: #fff;
  padding: 10px;
  text-align: center;
}

/* Меню */
nav {
  background-color: #ccc;
  padding: 10px;
  text-align: center;
}

nav a {
  text-decoration: none;
  color: #333;
  margin: 0 10px;
}

/* Контент */
.content {
  padding: 20px;
}

.content h2 {
  text-align: center;
}

/* Галерея */
.gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.gallery img {
  max-width: 200px;
  max-height: 200px;
  margin: 5px;
  border: 1px solid #ccc;
  padding: 5px;
}

/* Футер */
footer {
  background-color: #000;
  color: #fff;
  padding: 10px;
  text-align: center;
  position: fixed;
  bottom: 0;
  width: 100%;
}
</style>
</head>
<body>
  <header>
    <h1>Галерея изображений</h1>
  </header>
  <nav>
    <a href="#">Главная</a> |
    <a href="#">О нас</a> |
    <a href="#">Контакты</a>
  </nav>
  <section class="content">
    <h2>Наши фотографии</h2>
    <div class="gallery">
      <?php
      // Задаем путь к папке с изображениями
      $dir = './image';
      $files = scandir($dir);
      if ($files !== false) {
          for ($i = 0; $i < count($files); $i++) {
              if (($files[$i] != ".") && ($files[$i] != "..")) {
                  $path = $dir."/".$files[$i];
                  echo "<a href='$path'><img src='$path' alt='Image' /></a>";
              }
          }
      }
      ?>
    </div>
  </section>
  <footer>
    <p>&copy; 2024 Галерея изображений</p>
  </footer>
</body>
</html>
