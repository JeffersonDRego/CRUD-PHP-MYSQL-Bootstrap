<?php
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NOME</th>";
    echo "<th>ENDEREÇO</th>";
    echo "<th>Nº</th>";
    echo "<th>CIDADE</th>";
    echo "<th>ESTADO</th>";
    echo "<th>SEXO</th>";
    echo "<th>Editar</th>";
    echo "</tr>";

    // conectando ao banco de dados
    include('conexao.php');
    $sql = "SELECT * FROM users ORDER BY id ASC";
    $listatodos_usuarios = mysqli_query($conecta, $sql) or die("Erro de conexãoooo");

    // obtendo dados
    while ($row_usuario = mysqli_fetch_array($listatodos_usuarios)) {
        $campo1 = $row_usuario['id'];
        $campo2 = $row_usuario['nomebd'];
        $campo3 = $row_usuario['enderecobd'];
        $campo4 = $row_usuario['nrbd'];
        $campo5 = $row_usuario['cidadebd'];
        $campo6 = $row_usuario['estadobd'];
        $campo7 = $row_usuario['sexobd'];
        echo "<tr>";
        echo "<td>" . $campo1 . "</td>";
        echo "<td>" . $campo2 . "</td>";
        echo "<td>" . $campo3 . "</td>";
        echo "<td>" . $campo4 . "</td>";
        echo "<td>" . $campo5 . "</td>";
        echo "<td>" . $campo6 . "</td>";
        echo "<td>" . $campo7 . "</td>";
        echo "<td> <a href='edit_user.php?id=$campo1'>Editar</a></td>";
        echo "</tr>";
    
    }
    mysqli_close($conecta);

    
?>