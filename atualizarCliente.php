<?php

    include 'conexao.php';
    $id = $_POST['id'];

    $nomeCliente    = $_POST['nomeCliente'];
    $numeroCliente  = $_POST['numeroCliente'];
    $email          = $_POST['email'];
    $endereco       = $_POST['endereco'];
    $cpf            = $_POST['cpf'];
    $genero         = $_POST['genero'];

    $sql = "UPDATE `cliente` SET `nomeCliente`='$nomeCliente ',
    `numeroCliente`= $numeroCliente,`email`= '$email',`endereco`= '$endereco',
    `cpf`= $cpf,`genero`= '$genero' WHERE idCliente= $id";

    $atualizar = mysqli_query($conexao, $sql);



?>
<div class="container" style="width: 300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Cliente Atualizado com Sucesso!</h4>

    <div>
        <a href="listarCliente.php" role="button" class="btn btn-sm btn-outline-dark">Voltar</a>
    </div>
</div>