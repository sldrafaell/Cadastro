<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="css/Alugar.css">
    <title>Aluguel de bikes</title>
</head>
<body>

    <div id="bike1" class="m-6 p-2">
            <figure class="image is-128x128">
                <img src="img/bike-rosa.jpg">
                <p>ID: 1bikRosa</p>
                <P>R$700,00</P>
            </figure>
    </div>
    <div id="bike2" class="m-6 p-2">
        <figure class="image is-128x128">
            <img src="img/bike2.jpg">
            <p>ID: 2bikeAmare</p>
            <p>R$7.500</p>
        </figure>
    </div>
    <div id="lodin-form-container">
        <form action="Cadastrar.php" method="POST" class="m-6 box">
            <div class="field">
                <div class="control">
                    <input class="input" type="text" name="txtIdbicicleta" placeholder="Id da bicicleta">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <div class="select is-rounded" >
                        <select  name="txtPagamento">
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
    </div>   
</body>
</html>