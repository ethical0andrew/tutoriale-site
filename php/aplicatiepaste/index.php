<?php
    $conn = mysqli_connect('localhost', 'root', '', 'tutorialsite');
    if (!$conn) { echo "EROARE LA CONECTAREA BAZEI DE DATE"; }
    if (isset($_POST['continut'])) {
        $continut = $_POST['continut'];
        $cod = rand();
        $cod = sha1($cod);
        $cod = substr($cod, 0, 10);
        $sql = "INSERT INTO `paste`(`continut`, `cod`) VALUES ('$continut', '$cod')";
        mysqli_query($conn, $sql);
        echo "<p>Link-ul catre mesajul paste este aici: <a href='/tutorial/vizualizare.php?cod=$cod'>$cod</a></p>";
    }
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generare mesaj paste</title>
</head>
<body>
    <form method="POST">
        <textarea name="continut" placeholder="Introduceti continutul"></textarea>
        <br><button type="submit">Genereaza link unic</button>
    </form>
    <?php
        $sql = "SELECT * FROM paste";
        $query = mysqli_query($conn, $sql);
        while ($i = mysqli_fetch_assoc($query)) {
            echo "Mesajul " . $i['id'] . " cu link-ul <a href='/tutorial/vizualizare.php?cod=" . $i['cod'] . "'>" . $i['cod'] . "</a><br>";
        }
    ?>
</body>
</html>
