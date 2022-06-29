<?php
    $str = rand();
    $str = md5($str);
    $str = substr($str, 0, 10);
    echo "Folosind criptare md5: " . $str . "<br>";
    $str = rand();
    $str = sha1($str);
    $str = substr($str, 0, 10);
    echo "Folosind criptare sha1: " . $str . "<br>";
    $str = rand();
    $str = hash("sha256", $str);
    $str = substr($str, 0, 10);
    echo "Folosind criptare sha256: " . $str . "<br>";
    $str = bin2hex(random_bytes(5));
    echo "Folosind criptarea pe biti: " . $str . "<br>";
    $str = uniqid();
    $str = substr($str, 0, 10);
    echo "Folosind generarea uniqid: " . $str . "<br>";
?>
