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
    <title>Edição de Produto</title>
</head>

<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="atualizarProduto.php" method="POST">

                <?php
                $sql = "SELECT * FROM `produtos` WHERE idProduto = $id";

                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $idProduto          =  $array['idProduto'];
                    $codigoProduto      =  $array['codigoProduto'];
                    $nomeProduto        =  $array['nomeProduto'];
                    $quantidadeProduto  =  $array['quantidadeProduto'];
                    $categoriaProduto   =  $array['categoriaProduto'];
                    $fornecedorProduto  =  $array['fornecedorProduto'];

                ?>


                <h3 style="text-align:center;">Edição de Produtos</h3>
                <div class="form-group">
                    <label>Código Produto</label>
                    <input type="number" class="form-control" name="codigoProduto" value="<?php echo $codigoProduto ?>">

                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none">

                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" value="<?php echo $nomeProduto ?>">
                </div>
                <div class="form-group">
                    <label>Quantidade Produto</label>
                    <input type="number" class="form-control" name="quantidadeProduto" value="<?php echo $quantidadeProduto ?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoriaProduto">
                        <option>Headset</option>
                        <option>Mouse</option>
                        <option>Teclado</option>
                        <option>Monitor</option>
                        <option>Softwares</option>
                        <option>Mousepad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Fornecedores</label>
                    <select class="form-control" name="fornecedorProduto">
                        <option>Microsoft</option>
                        <option>Multilaser</option>
                        <option>Positivo</option>
                        <option>Lenovo</option>
                        <option>LG</option>
                        <option>Apple</option>
                    </select>
                </div>
                <div class="botao">
                    <button type="submit" class="btn btn-outline-dark">Atualizar</button>
                </div>
                <?php } ?>
            </form>
        </div>
    </section>
</body>

</html>