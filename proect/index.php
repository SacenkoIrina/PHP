<!DOCTYPE html>
<html lang="en">

<head>
    <!--standart-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/logo.png" rel="icon" />
    <title>ZooStore</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <!--Font, shriftul-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
    <!--js-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <header class="header">
        <!--panela de sus cu logo si corzina-->
        <div class="container">
            <!--Ca in video de pe youtube-->
            <div class="header_content">
                <!--aici deam contentul noestru-->
                <div class="logo"><img src="img/logo.png" alt=""></div>
                <h1>ZooStore </h1>
                <div class="korzina"> <a href="basket.php"><img src="img/korzina.png" alt=""></a></div>
            </div>
        </div>
        <!--content-->
    </header>
    <!--header-->

    <?php require 'header.php'; ?>

    <div class="intro">
        <!--imaginea intro-->
        <div class="container">
            <!--Ca sus, ca sa fie contentul in centru, ca in video-->
            <div class="intro_content">
                <!--intro content-->
                <div class="intro_img"><img src="img/produs_intro1.png" alt=""></div>
                <div class="intro_text">
                    <div class="intro_text_name">Корм для животных</div>
                    <div class="intro_text_info">Услуги, которые мы предлагаем - одни из самых важных, ведь только с нами ваш питомец всегда будет доволен, здоров и сыт!</div>
                    <div class="intro_text_shop">
                        <a href="#"><img src="img/Show Now.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!--content-->
    </div>
    <!--intro-->

    <div class="products">
        <div class="container">
            <h1 align='center'>
                Новый товар
            </h1>
            <div class="products_content">

                <div class="products_content_col"><a href="categories.php"><img src="img/dog1.jpg" alt=""></a>

                </div>

                <?php
                require 'conexiune.php';

                $interogare = "SELECT * FROM products ORDER BY id DESC ";
                $lansam_interogarea = mysqli_query($conexiune, $interogare);
                $i = 0;

                if ($lansam_interogarea) {
                    foreach ($lansam_interogarea as $row) {
                ?>

                        <div class="products_content_col"><a href="categories.php"><img src="img/<?= $row["imagine"]; ?>" alt=""></a></div>

                        <?php
                        $i++;

                        if ($i == 4) {
                            break;
                        }
                        ?>
                <?php
                    }
                }

                ?>
            </div>
        </div>
        <!--content-->
    </div>
    <!--products-->

    <footer class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="footer_content_shop">
                    <h2>Shop</h2>
                    <div><a href="categories.php">Новое</a></div>
                    <div><a href="categories.php">Скидки</a></div>
                </div>
                <div class="footer_content_information">
                    <h2>Информация</h2>
                    <div><a href="contact.php">О нас</a></div>
                    <div><a href="contact.php">Контакты</a></div><br>
                </div>
            </div>
        </div>
        <!--content-->
    </footer>
    <!--footer-->

    <div class="footer_copyright">
        <div class="container">
            <div class="footer_copyright_content">
                <div class="copyright">Copyright © 2024 Sacenco-Tocarev</div>
            </div>
        </div>
        <!--content-->
    </div>
    <!--footer-->
</body>

</html>