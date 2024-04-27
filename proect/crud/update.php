<?php 

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logo.png" rel="icon"/>
    <title>CRUD Application</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php 
	include ("db_conn.php");
    $userid = $_GET['id'];
    $get_user = mysqli_query($conexiune,"SELECT * FROM `products` WHERE id='$userid'");
    
    if(mysqli_num_rows($get_user) === 1){
        
        $row = mysqli_fetch_assoc($get_user);
  
?>
<form class="form" action="update.php" method="post" >
    <a href="home.php"><input type="button" name="z" value="Lista de produse" class="btn"></a>
    <hr>
    <div class="div">

    </div>
  <h2 align="center" class="title">Редактировать</h2>
  <div class="grid">
  <label>Id</label>
  <input type="text" name="id" value="<?php echo $row['id'];?>" required >
  <label>Название</label>
  <input type="text" name="denumire" value="<?php echo $row['denumire'];?>" required>
  <label>Цена</label>
  <input type="text" name="pret" value="<?php echo $row['pret'];?>" required>
  <label>Категории</label>
  <input type="text" name="categorie" value="<?php echo $row['categorie'];?>" required>
  <label>Описание</label>
  <input type="text" name="descriere" value="<?php echo $row['descriere'];?>" required>
  <label>Картинки</label>
  <input type="input" name="imagine" value="<?php echo $row['imagine'];?>" required>
  
  <input type="submit" name="sub" value="Adaugare" class="btn">
  </div>
            </form>
            <?php
  }
  ?>
        </div>
    </div>


</body>
</html>
    <?php 
    if (isset($_POST["sub"])) {
include ("db_conn.php");
$id=$_POST['id'];
$denumire=$_POST['denumire'];
$pret=$_POST['pret'];
$categorie=$_POST['categorie'];
$descriere=$_POST['descriere'];
$imagine=$_POST['imagine'];

$query="UPDATE products SET id='$id',denumire='$denumire', pret='$pret',categorie='$categorie',descriere='$descriere',imagine='$imagine' WHERE  id='$id'";
$checkresult = mysqli_query($conexiune, $query);
  if ($checkresult) {
    echo "<script>
        alert('produsul a fost editat');
        window.location.href = 'home.php';
        </script>";
        exit;
  } else {
    echo "Modificare neefectuata";
  }
  mysqli_close($conexiune);
}
    ?>