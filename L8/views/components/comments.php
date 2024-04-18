<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <style>
        .comments-container {
            margin-top: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }

        .comment {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        .comment p {
            margin: 5px 0;
        }

        .comment .name {
            font-weight: bold;
        }

        .comment .date {
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="comments-container">
        <h2>Comments</h2>
        <?php
        // Чтение комментариев из файла и вывод на страницу
        $comments = file_get_contents("handlers/comments.txt");
        $comments_array = explode("\n\n", $comments);

        foreach ($comments_array as $comment) {
            if (!empty($comment)) {
                $comment_parts = explode("\n", $comment);
                $name = str_replace("Name: ", "", $comment_parts[0]);
                $text = str_replace("Comment: ", "", $comment_parts[1]);
                ?>
                <div class="comment">
                    <p class="name"><?php echo $name; ?></p>
                    <p class="text"><?php echo $text; ?></p>
                </div>
                <?php
            }
        }
        ?>
    </div>
</body>
</html>
