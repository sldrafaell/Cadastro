<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="strylesheet" href="css/estilo.css">
</head>
<body>
    <div id="background-image"></div>
    <div id="background-overlay"></div>
    <div id="background-pattern"></div>
    <form action="cadastrar.php" method="POST" class="m-6">
        <di id="login-form-container">
            <div class="card">
                    <div class="content p-4">
                        <h1 class="title">Login</h1>
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
                        <button type="submit" class="button is-primary" href="Alugar.php">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>  
    </form>
</body>
</html>