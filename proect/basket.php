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
    <header class="header"><!--panela de sus cu logo si corzina-->
        <div class="container"><!--Ca in video de pe youtube-->
            <div class="header_content"><!--aici deam contentul noestru-->
                <div class="logo"><img src="img/logo.png" alt=""></div>
                <div class="korzina"> <a href="basket.php"><img src="img/korzina.png" alt=""></a></div>
            </div>
        </div><!--content-->
    </header><!--header-->

    <?php require 'header.php';?>

    <div class="basket">
        <div class="container">
            <div class="basket_content">
                <div class="basket_content_col">
                    <div class="basket_name">Корзина</div>
                    <div class="basket_nav">
                        <div class="basket_nav_col">Название</div>
                        <div class="basket_nav_col">Цена</div>
                        <div class="basket_nav_col">Номер</div>
                        <div class="basket_nav_col">Сумма</div>
                    </div>
                    <hr>
                </div>
                <div class="basket_content_col">
                    <div class="data_order">
                        <div class="data_order_col">
                            <div class="data_order_name">Данные для заказа</div>
                        </div>
                        <div class="data_order_col">
                            <div class="data_order_fullname">
                                <div class="name">Имя/Фамилия</div>
                                <input type="text" size="35%">
                            </div>
                        </div>

                        <div class="data_order_col">
                            <div class="data_order_tel">
                                <div class="data_order_tel_name">Телефон</div>
                                <input type="text" size="35%">
                            </div>
                        </div>

                        <div class="data_order_col">
                            <div class="data_order_email">
                                <div class="data_order_email_name">Email</div>
                                <input type="text" size="35%">
                            </div>
                        </div>

                        <div class="data_order_col">
                            <div class="data_order_address">
                                <div class="data_order_address_name">Адресс</div>
                                <input type="text" size="35%">
                            </div>
                        </div>
                        
                        <div class="data_order_col">
                            <div class="data_order_total">
                                <div class="data_order_total_name"></div>
                            </div>
                        </div>

                        <div class="data_order_col">
                            <div class="data_order_checkout">
                                <input type="submit" value="Plasati Comanda">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="basket_content_col">

                </div>
            </div>
        </div>
    </div>

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
    </footer><!--footer-->

    <div class="footer_copyright">
        <div class="container">
            <div class="footer_copyright_content">
                <div class="copyright">Copyright © 2024 Sacenco-Tocarev</div>
            </div>
        </div><!--content-->
    </div><!--footer-->
</body>
</html>