<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="img/logo.png" rel="icon"/>
  <title>ZooStore</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <form class="form" action="insert.php" method="post">
    <a href="home.php"><input type="button" name="z" value="Lista Produse" class="btn"></a>
    <hr>
    <h2 align="center" class="title">Добавление товара</h2>
    <div class="grid">
      <label>Id</label>
      <input type="text" name="id" required>
      <label>Denumire</label>
      <input type="text" name="denumire" required>
      <label>Pret</label>
      <input type="text" name="pret" required>
      <label>Categorie</label>
      <input type="text" name="categorie" required>
      <label>Descriere</label>
      <input type="text" name="descriere" required>
      <label>Imagine</label>
      <input type="input" name="imagine" required>

      <input type="submit" name="sub" value="Adaugare" class="btn">
    </div>
  </form>
  <?php
  if (isset($_POST["sub"])) {
    include("db_conn.php");
    $id=$_POST['id'];
$denumire=$_POST['denumire'];
$pret=$_POST['pret'];
$categorie=$_POST['categorie'];
$descriere=$_POST['descriere'];
$imagine=$_POST['imagine'];
    $query = "INSERT INTO products (id,denumire,pret,categorie,descriere,imagine) VALUES ('$id','$denumire','$pret','$categorie','$descriere','$imagine')";
    if (!mysqli_query($conexiune, $query)) {
      die(mysqli_error($conexiune));
    } else {
      echo "<script>
        alert('Товар добавлен');
        window.location.href = 'home.php';
        </script>";
      exit;
    }
    mysqli_close($conexiune);
  }
  ?>
</body>

</html>