<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD - Excluir</title>
    </head>
    <body>
        <form name="excluir" method="POST" action="deletar.php">
            <table style=" border:1px solid black;">
                <tr>
                    <th>ID</th><th>NOME</th><th>Sel</th>
                    
                    <?php
                        include "conexao.php";
                        if (isset($_POST['sel'])){
                            foreach($_POST['sel'] as $codigo){
                                $sql="DELETE FROM users WHERE id=$codigo";
                                $listatodos_usuarios = mysqli_query($conecta, $sql) or die ("erro de conexão");
                            }
                            
                        }  /*else{
                                echo "DEU ERRAAADO";
                            }*/
                        
                        
                        $sql = "SELECT * FROM users ORDER BY id ASC";
                        $listatodos_usuarios = mysqli_query($conecta, $sql);
                        
                        while ($registro = mysqli_fetch_row($listatodos_usuarios)) {
                            $vcod=$registro[0];
                            $vnome=$registro[1];


                            echo "<tr>";
                            echo "<td>" . $vcod . "</td>";
                            echo "<td>" . $vnome . "</td>";
                            echo "<td align-center><input type=checkbox value=$vcod name=sel[]></td>";
                            echo "</tr>";
                        }
                        mysqli_close($conecta);
                    ?>
                </tr>
            </table>
            <br/>
            <input type="hidden" name="f_del"/>
            <input type="submit" value="excluir"/>
        </form>        
    </body>
</html>