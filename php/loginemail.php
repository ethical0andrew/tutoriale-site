<?php
    $conn = mysqli_connect('localhost', 'root', '', 'tutorialsite');
    if (!$conn) { echo "EROARE LA CONECTAREA BAZEI DE DATE"; }
    if (isset($_POST['adresa']) && isset($_POST['cod'])) {
        $adresa = $_POST['adresa'];
        $cod = $_POST['cod'];
        $sql = "SELECT * FROM loginemail WHERE adresa = '$adresa'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) == 1) {
            while ($i = mysqli_fetch_assoc($query)) {
                if ($i['cod'] == $cod) {
                    echo "Codul trimis este cel corect";
                    $codnou = rand();
                    $codnou = md5($codnou);
                    $codnou = substr($codnou, 0, 10);
                    $sqlinsert = "UPDATE `loginemail` SET `cod` = '$codnou' WHERE `adresa` = '$adresa'";
                    mail($adresa, "Tutorial site", "Noul tau cod de conectare este: $codnou", "From: admin@codulluiandrei.ro");
                    mysqli_query($conn, $sqlinsert);
                    echo "Ai primit pe email noul cod de conectare";
                } 
                else { echo "Codul trimis este incorect"; }
            }
        } else { echo "Adresa nu a fost gasita in baza de date"; }
    } else if (isset($_POST['adresa']) && !isset($_POST['cod'])) {
        $adresa = $_POST['adresa'];
        $cod = rand();
        $cod = md5($cod);
        $cod = substr($cod, 0, 10);
        $sql = "SELECT * FROM `loginemail` WHERE adresa = '$adresa'";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) == 1) {
            echo "Adresa exista deja in baza de date";
        } else {
            $sqlinsert = "INSERT INTO `loginemail`(`adresa`, `cod`) VALUES ('$adresa', '$cod')";
            mail($adresa, "Tutorial site", "Codul tau de conectare este: $cod", "From: admin@codulluiandrei.ro");
            echo "Datele au fost trimise cu succes";
            echo "Ai primit pe email codul de conectare";
            mysqli_query($conn, $sqlinsert);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Site</title>
</head>
<body>
    <h1>Formular pentru inregistrare</h1>
    <form method="POST">
        <input name="adresa" type="email" placeholder="Adresa de email aici:">
        <button type="submit">Trimite</button>
    </form>
    <h1>Formular pentru conectare</h1>
    <form method="POST">
        <input name="adresa" type="email" placeholder="Adresa de email aici:">
        <input name="cod" placeholder="Codul de conectare aici:">
        <button type="submit">Trimite</button>
    </form>
</body>
</html>
