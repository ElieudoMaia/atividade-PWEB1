<?php

    $numero1 = $_GET['number1'];
    $numero2 = $_GET['number2'];

    $resultado = $numero1 + $numero2;

    if($resultado > 20) {
        echo $resultado + 8;
    } else {
        echo $resultado - 5;
    }

?>