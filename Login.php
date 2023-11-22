<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="strylesheet" href="estilo.css">
</head>

<body>
    <div id="background-image"></div>
    <div id="background-overlay"></div>
    <div id="background-pattern"></div>
    <form action="cadastrar.php" method="POST" class="m-6 box">
        <di id="login-form-container">
            <div class="card" style="width: 400px;">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">John Smith</p>
                            <p class="subtitle is-6">@johnsmith</p>
                        </div>
                    </div>

                    <div class="content">
                    <h1 class="title ">Login</h1>
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
                    <button type="submit" class="button is-primary" href="Alugar.php">Cadastrar</button>
                    <a class="button is-warning" href="listar.php">Listar dados</a>
                    </div>
                </div>
            </div>
        </div>  
    </form>
</body>
</html>