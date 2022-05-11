<?php
    $servidor="fdb33.awardspace.net";
    $usuario="3941906_cadaulasenac";
    $senha="6154876cad";
    $bdname="3941906_cadaulasenac";

    $conecta = mysqli_connect ($servidor, $usuario, $senha, $bdname);

    if(!$conecta){
        die("Erro de conexão" .mysqli_connect_error());

    }
?>
