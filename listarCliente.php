<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Listagem de Clientes</title>
</head>

<body>
    <section>
        <div class="container text-center">
            <h3>Listagem de Clientes</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Número</th>
                        <th scope="col">Email</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>

                <?php

                include 'conexao.php';
                $sql = "SELECT * FROM `cliente`";
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

                    <tr>
                        <td><?php echo $nomeCliente      ?></td>
                        <td><?php echo $numeroCliente    ?></td>
                        <td><?php echo $email            ?></td>
                        <td><?php echo $endereco         ?></td>
                        <td><?php echo $cpf              ?></td>
                        <td><?php echo $genero           ?></td>
                        <td><a style="text-decoration:none; color:black ;" href="editarCliente.php?id=<?php echo $idCliente ?>">Editar</a></td>
                        <td><a style="text-decoration:none; color:red ;" href="excluirCliente.php?id=<?php echo $idCliente ?>">Excluir</a></td>

                    </tr>

                <?php  }  ?>

            </table>
        </div>
    </section>
</body>

</html>