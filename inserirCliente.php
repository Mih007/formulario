<?php

    include 'conexao.php';

    $nomeCliente    = $_POST['nomeCliente'];
    $numeroCliente  = $_POST['numeroCliente'];
    $email          = $_POST['email'];
    $endereco       = $_POST['endereco'];
    $cpf            = $_POST['cpf'];
    $genero         = $_POST['genero'];


    // $sql = "INSERT INTO `cliente`(`nomeCliente`, `numeroCliente`, `email`, `endereco`, `cpf`, 'genero') 
    // VALUES ('$nomeCliente',$numeroCliente,'$email','$endereco',$cpf,'$genero')";

    $sql = "INSERT INTO `cliente`(`nomeCliente`, `numeroCliente`, `email`, `endereco`, `cpf`, `genero`) 
    VALUES ('$nomeCliente',$numeroCliente,'$email','$endereco',$cpf,'$genero')";

    $inserir = mysqli_query($conexao, $sql);

?>

<div class="container" style="width: 300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Cliente Inserido com Sucesso!</h4>

    <div>
        <a href="index.php" role="button" class="btn btn-sm btn-outline-dark">Cadastrar Novo Cliente</a>
    </div>
</div>