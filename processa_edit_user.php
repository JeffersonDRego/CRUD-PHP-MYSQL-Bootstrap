<?php
    include_once('conexao.php');
    $id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome=filter_input(INPUT_POST, 'nomebd', FILTER_SANITIZE_STRING);
    $endereco=filter_input(INPUT_POST, 'enderecobd', FILTER_SANITIZE_STRING);
    $nr=filter_input(INPUT_POST, 'nrbd', FILTER_SANITIZE_NUMBER_INT);
    $cidade=filter_input(INPUT_POST, 'cidadebd', FILTER_SANITIZE_STRING);
    $estado=filter_input(INPUT_POST, 'estadobd', FILTER_SANITIZE_STRING);
    $sexo=filter_input(INPUT_POST, 'sexobd', FILTER_SANITIZE_STRING);
    
    $sql = "UPDATE users SET nomebd='".$nome."', enderecobd='".$endereco."',  nrbd='".$nr."',  cidadebd='".$cidade."',  estadobd='".$estado."',  sexobd='".$sexo."' WHERE id='".$id."'";
    if(mysqli_query($conecta, $sql)){
        echo "Usuário editado com sucesso.<br>";
        echo "<a href='lista.php'>LISTAR banco de dados de usuários<a><br>";
        echo "<a href='deletar.php'>DELETAR do banco de dados de usuários<a>";
    } else {
        echo "ERROR: Usuario não editado. $sql. " 
                                . mysqli_error($conecta);
    } 
    mysqli_close($conecta);
?>