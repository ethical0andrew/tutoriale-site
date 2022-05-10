<?php
    if (mail("adresa_primitor@domeniu.ro", "E-mail PHP", "Trimis folosind tutorialul de pe codulluiandrei.ro!", "From: adresa_livrator@domeniu.ro")) {
        echo "E-mail trimis!";
    } else {
        echo "A aparut o eroare!";
    }
?>
