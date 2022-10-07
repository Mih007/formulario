<?php

include 'conexao.php';

$codigoProduto      =  $_POST ['codigoProduto'];
$nomeProduto        =  $_POST ['nomeProduto'];
$quantidadeProduto  =  $_POST ['quantidadeProduto'];
$categoriaProduto   =  $_POST ['categoriaProduto'];
$fornecedorProduto  =  $_POST ['fornecedorProduto'];

$sql = "INSERT INTO `produtos`(`codigoProduto`, `nomeProduto`, `quantidadeProduto`, `categoriaProduto`, `fornecedorProduto`) 
VALUES ($codigoProduto,'$nomeProduto',$quantidadeProduto,'$categoriaProduto','$fornecedorProduto')";

$inserir = mysqli_query($conexao, $sql)

?>

<div class="container" style="width: 300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Produto Inserido com Sucesso!</h4>

    <div>
        <a href="index.php" role="button" class="btn btn-sm btn-outline-dark">Cadastrar Novo Item</a>
    </div>
</div>