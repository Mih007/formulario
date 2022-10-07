<?php

    include 'conexao.php';
    $id = $_POST['id'];

    $codigoProduto      =  $_POST['codigoProduto'];
    $nomeProduto        =  $_POST['nomeProduto'];
    $quantidadeProduto  =  $_POST['quantidadeProduto'];
    $categoriaProduto   =  $_POST['categoriaProduto'];
    $fornecedorProduto  =  $_POST['fornecedorProduto'];
    
    $sql = "UPDATE `produtos` SET `codigoProduto`=$codigoProduto, `nomeProduto`='$nomeProduto',
    `quantidadeProduto`=$quantidadeProduto, `categoriaProduto`='$categoriaProduto',
    `fornecedorProduto`='$fornecedorProduto' WHERE idProduto= $id";

    $atualizar = mysqli_query($conexao, $sql);

    

?>
<div class="container" style="width: 300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Produto Atualizado com Sucesso!</h4>

    <div>
        <a href="listarProduto.php" role="button" class="btn btn-sm btn-outline-dark">Voltar</a>
    </div>
</div>