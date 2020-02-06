<?php 

    $numero = $_GET['number'];
    $verifica = -1;

    if($numero%10 == 0) {
        echo "Divisível por 10<br />";
        $verifica++;
    }
    if($numero%5 == 0) {
        echo "Divisível por 5<br />";
        $verifica++;
    }
    if($numero%2 == 0) {
        echo "Divisível por 2<br />";
        $verifica++;
    }

    if($verifica == -1) {
        echo "Não é divisível por 10, 5 ou 2";
    }

?>