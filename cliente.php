<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="inserirCliente.php" method="POST">
                <h3 style="text-align:center;">Cadastro de Cliente</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nomeCliente" placeholder="Nome do cliente" required>
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="number" class="form-control" name="numeroCliente" placeholder="Número do cliente" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
                </div>
                <div class="form-group">
                    <label>CPF</label>
                    <input type="number" class="form-control" name="cpf" placeholder="cpf" required>
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
                    <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>