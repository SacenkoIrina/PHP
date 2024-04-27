<?php
session_start();

if (isset($_SESSION["username"])) {

?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logo.png" rel="icon"/>
    <link rel="stylesheet" href="styles.css">

    <title>Admin Aplication</title>
  </head>
  <body>
    <form method="post" action="insert.php">
      <a href="insert.php"><input type="button" name="add" value="Adaugă produs" class="btn" style="margin-left: 5%"></a>
    </form>
    <div class="div">
      <form action="log_out.php" method="POST" class="form-inline">
        <p class="mr-md-2 mt-3 text-uppercase font-weight-bold">
          Salutare<i><?php echo $_SESSION["username"];

                        ?> <button class="btn btn-danger my-2 my-sm-0" name="logout">Log out</button></i> </p>
        <a href="add_admin.php" class="btn btn-danger my-2 my-sm-0"  name="NewAdmin ">Create new admin </a> 
      
        </p>

      </form>
    </div>
    <?php
    include("db_conn.php");
    $sql = mysqli_query($conexiune, "SELECT * FROM products");

    echo "<table id='customers' border=1>";
    echo  "<tr class='header'><th>ID</th><th>Название</th><th>Цена</th><th>Категории</th><th>Описание</th><th>Картинки</th><th>Редактирование</th></tr>";
    while ($row = mysqli_fetch_row($sql)) {
      echo  "<th class='header'>$row[0]</th><th>$row[1]</th><th >$row[2] lei</th><th >$row[3]</th><th style='width:1000px'>$row[4]</th><th>$row[5]</th></th>

  	<td><a href='update.php?id=" . $row['0'] . "'>  <img src='img/edit.svg'  class='img'></a>
        <a href='delete.php?id=" . $row['0'] . "'>  <img src='img/delete.svg'  class='img'></a></td></tr>";
    }
    echo "</table>";
    mysqli_close($conexiune);

    ?>
  </body>

  </html>

<?php
} else {
  header("Location:log_in.php");
}
