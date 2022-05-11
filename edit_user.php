<?php
    session_start();
    include_once("conexao.php");
    $id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    //$resulta_user="SELECT * FROM users WHERE id='6'";
    $resultado = mysqli_query($conecta, "SELECT * FROM users WHERE id='$id'");
    $row_usuario=mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <!--BOOTSTRAP ICON-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>CRUD EDITAR - Jefferson D. Rego</title>
    </head>
    <body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 formdiv m-4" id="formulario">
                    <form action="processa_edit_user.php" method="POST">

                        <div class="row mb-3"  id="titulocadastro">
                            <h4>EDITAR USUARIO:</h4>
                        </div>
             
                        <input type="hidden" name="id" class="form-control" value="<?php echo $row_usuario['id'] ?>">
                        <div class="mb-3">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nomebd" class="form-control" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nomebd'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="enderecobd" class="form-control" placeholder="Digite o endereço" value="<?php echo $row_usuario['enderecobd'] ?>">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-4">
                                <label for="nr">Nº:</label>
                                <input type="number" name="nrbd" class="form-control" placeholder="" value="<?php echo $row_usuario['nrbd'] ?>">
                            </div>
                            <div class="mb-3 col-8">
                                <label for="cidade">Cidade:</label>
                                <input type="text" name="cidadebd" class="form-control" placeholder="Cidade:" value="<?php echo $row_usuario['cidadebd'] ?>">
                            </div>
                        </div>
                        
                        <div class="mb-3 col-8">
                            <label for="Estado" class="form-label">Selecione o estado:</label>
                            <input class="form-control" list="datalistOptions" name="estadobd" placeholder="digite ou selecione" value="<?php echo $row_usuario['estadobd'] ?>">
                            <datalist id="datalistOptions">
                                <option value="Acre (AC)">
                                <option value="Alagoas (AL)">
                                <option value="Amapá (AP)">
                                <option value="Amazonas (AM)">
                                <option value="Bahia (BA)">
                                <option value="Ceará (CE)">
                                <option value="Distrito Federal (DF)">
                                <option value="Espírito Santo (ES)">
                                <option value="Goiás (GO)">
                                <option value="Maranhão (MA)">
                                <option value="Mato Grosso (MT)">
                                <option value="Mato Grosso do Sul (MS)">
                                <option value="Minas Gerais (MG)">
                                <option value="Pará (PA)">
                                <option value="Paraíba (PB)">
                                <option value="Paraná (PR)">
                                <option value="Pernambuco (PE)">
                                <option value="Piauí (PI)">
                                <option value="Rio de Janeiro (RJ)">
                                <option value="Rio Grande do Norte (RN)">
                                <option value="Rio Grande do Sul (RS)">
                                <option value="Rondônia (RO)">
                                <option value="Roraima (RR)">
                                <option value="Santa Catarina (SC)">
                                <option value="São Paulo (SP)">
                                <option value="Sergipe (SE)">
                                <option value="Tocantins (TO)">                                                                              
                            </datalist>
                        </div>
                        <div class="row m-2">
                            <label class="form-label"for="sexo">Sexo:</label>
                            <div class="form-check col-3">
                                <input class="form-check-input d-flex" type="radio" name="sexobd" value="masc">
                                <label class="form-check-label" for="sexo">
                                    Masc.
                                </label>
                            </div>
                            <div class="form-check col-3">
                                <input class="form-check-input d-flex" type="radio" name="sexobd" value="fem" >
                                <label class="form-check-label" for="sexo">
                                    Fem.
                                </label>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" style="box-shadow: 2px 2px 3px black; margin-left: 80%;" class="btn btn-primary "value="Editar">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    
    <footer class="container">
        <div class="row justify-content-center">
            <p>© SENAC - 2021 - Jefferson D. Rego</p>
        </div>
    </footer>
    </body>
</html>