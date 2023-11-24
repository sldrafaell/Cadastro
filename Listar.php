<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<?php
require "./php/Conexao.php";
require "./php/Cliente.php";
require "./php/RepositorioCliente.php";

$valores = (new RepositorioCliente())->exibirTudo($banco);

?>
<table class="table is-striped">
    <tr>
        <td>Email</td>
        <td>Pagamento</td>
        <td>Idade</td>
        <td>Id Bicicleta</td>
    </tr>
    <?php foreach ($valores as $valor): ?>
        <tr>
            <td>
                <?= $valor['email'] ?>
            </td>
            <td>
                <?= $valor['pagamento'] ?>
            </td>
            <td>
                <?= $valor['idade'] ?>
            </td>
            <td>
                <?= $valor['idbicicleta'] ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>