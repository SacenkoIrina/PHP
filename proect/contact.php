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

    <div class="contact"><!--contact-->
        <div class="container">
            <div class="contact_content">
                <div class="contact_info">
                    <div class="contact_info_tel">
                        <div class="contact_info_nav">Телефон</div>
                        <div class="contact_info_item">+37311223344</div>
                        <div class="contact_info_item">022-11-22-33</div>

                    </div>
                    <div class="contact_info_locate">
                        <div class="contact_info_nav">Улица:</div> 
                        <div class="contact_info_item">Arborilor 21</div>
                    </div>
                    <div class="contact_info_email">
                        <div class="contact_info_nav">Email:</div> 
                        <div class="contact_info_item">sacenco.irina@gmail.com</div>
                        <div class="contact_info_item">animal.store@gmail.com</div>
                        <div class="contact_info_item">tocarev.vlada@gmail.com</div>
                        
                    </div>
                </div>
                <div class="contact_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2720.8186480190175!2d28.838307515856748!3d47.004533737365975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97ea024d134bf%3A0x22bdf957178c0339!2zU3RyYWRhIEFyYm9yaWxvciAyMSwgQ2hpyJlpbsSDdSwg0JzQvtC70LTQsNCy0LjRjw!5e0!3m2!1sru!2s!4v1587010156489!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div><!--content-->
    </div><!--intro-->

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