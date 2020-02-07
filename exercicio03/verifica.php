<?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $sexo = $_GET['sexo'];

    if($idade < 18 && $sexo == 'F') {
        echo 'Acesso proibido';
    } else {
        echo 'Acesso permitido.';
    }

?>