<?php  
include ("db_conn.php");
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
    
    $userid = $_GET['id'];
    $delete_user = mysqli_query($conexiune,"DELETE FROM `products` WHERE id='$userid'");
    
    if($delete_user){
        echo "<script>
        alert('Товар был удален');
        window.location.href = 'home.php';
        </script>";
        exit;
    }else{
    echo "Ошибка!"; 
    }
}
?>