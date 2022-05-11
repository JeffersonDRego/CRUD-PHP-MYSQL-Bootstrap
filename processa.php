<?php
    include('conexao.php');
    $nome=$_POST['nomebd'];
    $endereco=$_POST['enderecobd'];
    $logradouro=$_POST['nrbd'];
    $cidade=$_POST['cidadebd'];
    $estado=$_POST['estadobd'];
    $sexo=$_POST['sexobd'];
    $sql="INSERT INTO users (nomebd, enderecobd, nrbd, cidadebd, estadobd, sexobd) VALUES ('$nome','$endereco','$logradouro','$cidade','$estado','$sexo')";

    if (mysqli_query($conecta, $sql)){
        echo "Usuario cadastrado com sucesso";
        header('Location: lista.php');
    }else{
        echo"Erro".mysqli_connect_error();
        header('Location: index.php');
    }
    mysqli_close($conecta);
?>