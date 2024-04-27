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
        <!--container-->
    </header>
    <!--header-->

    <?php require 'header.php'; ?>

    <div class="categ_products">
        <div class="container">
            <div class="categ_products_contet">
                <div class="categ_pr_menu">
                    <div class="menu_contet">
                        <div class="categ_main_nav">Категории</div>
                        <div class="cat_nav">
                            <a class="products__nav" href="#" data-filter="all">Общее</a>
                            <a class="products__nav" href="#" data-filter="birds">Птички</a>
                            <a class="products__nav" href="#" data-filter="cats">Кошечки</a>
                            <a class="products__nav" href="#" data-filter="dogs">Собачки</a>
                            <a class="products__nav" href="#" data-filter="fish">Рыбки</a>
                        </div>
                    </div>
                </div>

                <div class="categ_pr">
                    <div class="categ_pr_grid">

                        <?php require 'conexiune.php'; ?>
                        <?php


                        $interogare = "SELECT * FROM products";
                        $sql = mysqli_query($conexiune, $interogare);

                        if ($sql) {
                            foreach ($sql as $randuri) {

                        ?>
                                <div class="categ_item" data-cat="birds">
                                    <div class="categ_item_container">
                                        <div class="categ_item_image">
                                            <img class="categ_image" src="img/<?=$randuri["imagine"];?>" alt="">
                                        </div>
                                        <div class="categ_item_content">
                                            <div class="item_name">
                                                <div class="item_fullname"><?=$randuri["denumire"];?></div>
                                            </div>
                                            <div class="item_buy"><a href="#"><?=$randuri["pret"];?> lei </a></div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>

            </div>
            <!--contet-->
        </div>
        <!--container-->
    </div>
    <!--nav-->

    <footer class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="footer_content_shop">
                    <h2>Shop</h2>
                    <div><a href="categories.php">Новое</a></div>
                    <div><a href="categories.php">Скидки</a></div>
                </div>
                <div class="footer_content_information">
                    <h2>Informatie</h2>
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
        <!--container-->
    </div>
    <!--footer-->
</body>

</html>