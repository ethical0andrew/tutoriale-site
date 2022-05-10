<?php
    $mesaj = '<h1 style="font-size: 20px; font-weight: bold;">Trimis folosind tutorialul de pe codulluiandrei.ro</h1>';
    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'From: adresa_livrator@domeniu.ro';
    mail("adresa_primitor@domeniu.ro", "E-mail HTML trimis din PHP", $mesaj, $header);
?>
