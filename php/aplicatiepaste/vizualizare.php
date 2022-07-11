<?php
    $conn = mysqli_connect('localhost', 'root', '', 'tutorialsite');
    if (!$conn) { echo "EROARE LA CONECTAREA BAZEI DE DATE"; }
    if (isset($_REQUEST['cod'])) {
        $cod = $_REQUEST['cod'];
        $sql = "SELECT * FROM paste WHERE cod = '$cod'";
        $query = mysqli_query($conn, $sql);
        while ($i = mysqli_fetch_assoc($query)) {
            echo $i['continut'];
        }
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
    <br><a href="index.php">Inapoi la pagina principala</a>
</body>
</html>
