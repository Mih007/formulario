<?php

include 'conexao.php';
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Edição de Cliente</title>
</head>

<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="atualizarCliente.php" method="POST">

                <?php
                $sql = "SELECT * FROM `cliente` WHERE idCliente = $id"; 

                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {

                    $idCliente      = $array['idCliente'];
                    $nomeCliente    = $array['nomeCliente'];
                    $numeroCliente  = $array['numeroCliente'];
                    $email          = $array['email'];
                    $endereco       = $array['endereco'];
                    $cpf            = $array['cpf'];
                    $genero         = $array['genero'];

                ?>

                <h3 style="text-align:center;">Cadastro de Cliente</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nomeCliente" value="<?php echo $nomeCliente ?>">

                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none">
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="number" class="form-control" name="numeroCliente" value="<?php echo $numeroCliente ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">
                </div>
                <div class="form-group">
                    <label>CPF</label>
                    <input type="number" class="form-control" name="cpf" value="<?php echo $cpf ?>">
                </div>
                <div class="form-group">
                    <label>Gênero</label>
                    <select class="form-control" name="genero">
                        <option>Selecione</option>
                        <option>Feminino</option>
                        <option>Masculino</option>
                        <option>Outro</option>
                    </select>
                </div>
                <div class="botao">
                    <button type="submit" class="btn btn-outline-dark">Atualizar</button>
                </div>
                <?php  }  ?>
            </form>
        </div>
    </section>
</body>

</html>