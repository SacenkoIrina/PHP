<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $comentariu = $_POST["comentariu"];
    
    // Aici puteți adăuga cod pentru a salva datele într-un fișier sau în baza de date
    // Exemplu: salvarea într-un fișier text
    $file = fopen("recenzii.txt", "a");
    fwrite($file, "Nume: " . $nume . "\n");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Comentariu: " . $comentariu . "\n\n");
    fclose($file);
}
?>

<form action="procesare.php" method="POST">
    <div class="feedback">
        <div class="container">
            <div class="feedback_content">
                <div class="feedback_name">Отзывы</div>
                <div class="feedback_fullname">
                    <input type="text" name="nume" placeholder="Введите Имя" value="<?php echo isset($nume) ? $nume : ''; ?>"><br>
                </div>
                <div class="feedback_email">
                    <input type="email" name="email" placeholder="Введите email" value="<?php echo isset($email) ? $email : ''; ?>"><br>
                </div>
                <?php
// Verificăm dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectarea la baza de date
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pet_shop";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Verificăm conexiunea la baza de date
    if ($conn->connect_error) {
        die("Не удалось подключится: " . $conn->connect_error);
    }
    
    // Obținem datele din formular
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $comentariu = $_POST["comentariu"];
    
    // Prevenim atacuri de tip SQL injection
    $nume = mysqli_real_escape_string($conn, $nume);
    $email = mysqli_real_escape_string($conn, $email);
    $comentariu = mysqli_real_escape_string($conn, $comentariu);
    
    // Construim și executăm interogarea SQL pentru inserarea datelor
    $sql = "INSERT INTO recenzii (nume_autor, email_autor, text) VALUES ('$nume', '$email', '$comentariu')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location:feed.php");
    } else {
        echo "Ошибка на добавление отзыва в БД: " . $conn->error;
    }
    
    // Închidem conexiunea la baza de date
    $conn->close();
}
?>
