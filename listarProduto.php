<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Listagem de Produtos</title>
</head>

<body>
    <section>
        <div class="container text-center">
            <h3>Listagem de Produtos</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>

                <?php

                include 'conexao.php';
                $sql = "SELECT * FROM `produtos`";
                $busca = mysqli_query($conexao, $sql);
                while ($array = mysqli_fetch_array($busca)) {

                    $idProduto          =  $array['idProduto'];
                    $codigoProduto      =  $array['codigoProduto'];
                    $nomeProduto        =  $array['nomeProduto'];
                    $quantidadeProduto  =  $array['quantidadeProduto'];
                    $categoriaProduto   =  $array['categoriaProduto'];
                    $fornecedorProduto  =  $array['fornecedorProduto'];
                
                ?>
                
                <tr>
                    <td><?php echo $codigoProduto      ?></td>
                    <td><?php echo $nomeProduto        ?></td>
                    <td><?php echo $quantidadeProduto  ?></td>
                    <td><?php echo $categoriaProduto   ?></td>
                    <td><?php echo $fornecedorProduto  ?></td>
                    <td><a style="text-decoration:none; color:black ;" href="editarProduto.php?id=<?php echo $idProduto ?>">Editar</a></td>
                    <td><a style="text-decoration:none; color: red ;" href="excluirProduto.php?id=<?php echo $idProduto ?>">Excluir</a></td>
                </tr>

                <?php  }  ?>

            </table>

        </div>
    </section>

</body>

</html>