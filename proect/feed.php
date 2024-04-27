<!DOCTYPE html>
<html lang="en">
<head>
    <!--standart-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/logo.png" rel="icon"/>
    <title>ZooStore</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <!--Font, shriftul-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
    <!--js-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="proiect/comm.css">
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
            width: 800px;
        }
        th, td {
            border: 3px solid #3BC5B6;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="header"><!--panela de sus cu logo si corzina-->
        <div class="container"><!--Ca in video de pe youtube-->
            <div class="header_content"><!--aici deam contentul noestru-->
                <div class="logo"><img src="img/logo.png" alt=""></div>
                <div class="korzina"> <a href="basket.php"><img src="img/korzina.png" alt=""></a></div>
            </div>
        </div><!--content-->
    </header><!--header-->

    <?php require 'header.php';?>
    <form action="procesare.php" method="POST">
    <div class="feedback">
        <div class="container">
            <div class="feedback_content">
                <div class="feedback_name">Отзывы</div>
                <div class="feedback_fullname">
                <input type="text" name="nume" placeholder="Introdu numele"><br>
                </div>
                <div class="feedback_email">
                <input type="email" name="email" placeholder="Introdu adresa de email"><br>
                </div>
                <div class="feedback_text">
                    <input type="textarea" name="comentariu" placeholder="">
                </div>
                <div class="feedback_submit">
                <input type="submit" value="Trimite">
                </div>
            </div>
        </div>
        
    </form>

        </form>



    </div>

    </div>
    <?php 
    require 'conexiune.php';
    if(isset($conexiune)){
    
        // Obținem datele din baza de date
        $sql = "SELECT id_recenzii, nume_autor, email_autor, text FROM recenzii";
        $result = $conexiune->query($sql);
    }

    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Имя автора</th>
            <th>Email автора</th>
            <th>Текст</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_recenzii"] . "</td>";
                echo "<td>" . $row["nume_autor"] . "</td>";
                echo "<td>" . $row["email_autor"] . "</td>";
                echo "<td>" . $row["text"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Не существует отзывов в БД.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Închidem conexiunea la baza de date
$conexiune->close();
?>

    <footer class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="footer_content_shop"><h2>Shop</h2>
                    <div><a href="categories.php">Новое</a></div>
                    <div><a href="categories.php">Скидки</a></div>
                </div>
                <div class="footer_content_information"><h2>Информация</h2>
                    <div><a href="contact.php">О нас</a></div>
                    <div><a href="contact.php">Контакты</a></div><br>
                </div>
            </div>
        </div><!--content-->
    </footer><!--footephp-->

    <div class="footer_copyright">
        <div class="container">
            <div class="footer_copyright_content">
                <div class="copyright">Copyright © 2024 Sacenco-Tocarev</div>
            </div>
        </div><!--content-->
    </div><!--footer-->
</body>
</html>