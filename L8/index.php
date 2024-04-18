<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        
        nav ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        
        main {
            padding: 20px;
        }
        
        section {
            margin-bottom: 20px;
        }
        
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        
        form label {
            display: block;
            margin-bottom: 5px;
        }
        
        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        
        .comments {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        
        .comments h2 {
            margin-top: 0;
        }
        
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        
        footer p {
            margin: 5px 0;
        }
        
        footer ul {
            padding: 0;
            list-style-type: none;
            margin-top: 10px;
        }
        
        footer ul li {
            display: inline;
            margin-right: 10px;
        }
        
        footer ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>

</head>
<body>

<?php
require_once('Page.php');
?>

<?php Page::part('views/header'); ?>
    <main>
        <section>
            <h2>My Website</h2>
            <p>Здесь вы можете оставить комментарий и почитать другие!</p>
        </section>

        <!-- Форма для комментариев -->
        <?php include('views/components/form.php'); ?>

        <!-- Комментарии -->
        <?php include('views/components/comments.php'); ?>
    </main>
</body>
<?php Page::part('views/footer'); ?>
</html>
