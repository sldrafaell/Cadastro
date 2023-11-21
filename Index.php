<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alugar bike</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <div class="m-3 p-2">
            <figure class="image is-128x128">
                <img src="bike-rosa.jpg">
                <p>ID: 1bikRosa</p>
            </figure>
    </div>
    <div class="m-3 p-2">
        <figure class="image is-128x128">
            <img src="bike2.jpg">
            <p>ID: 2bikeAmare</p>
        </figure>
    </div>
    
    <form action="cadastrar.php" method="POST" class="m-6 box">
        <h1 class="title ">Alugar</h1>
        <div class="field">
            <div class="control">
                <input class="input" type="email" name="txtEmail" placeholder="Email">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="input" type="password" name="txtSenha" placeholder="Password">
            </div>
        </div>
        <div class="field">
            <p class="control">
                <input class="input" type="text" name="txtNome" placeholder="Nome">
            </p>
        </div>
        <div class="field">
            <div class="control">
                <input class="input" type="text" name="txtCpf" placeholder="Cpf">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="input" type="text" name="txtIdade" placeholder="Idade">
            </div>
        </div> 
        <div class="field">
            <div class="control">
                <input class="input" type="text" name="txtIdbicicleta" placeholder="Id da bicicleta">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <div class="select">
                    <select name="txtPagamento">
                        <option>Forma de pagamento</option>
                        <option>Cartão de crédito</option>
                        <option>Cartão de débito</option>
                        <option>Boleto</option>
                    </select>
                </div>  
            </div>
        </div>
        
        
        <button type="submit" class="button is-primary">Cadastrar</button>
        <a class="button is-warning" href="listar.php">Listar dados</a>
    </form>
</body>

</html>