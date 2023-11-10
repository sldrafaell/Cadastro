<?php
require "./php/Conectar.php";
require "./php/Autor.php";
require "./php/RepositorioAutor.php";

$nome = $_POST['txtNome'];
$cpf =  $_POST['txtCpf'];
$pagamento = $_POST['floatPagamento'];
$idade = $_POST['intIdade'];
$idbicicleta = $_POST['intIdbicicleta'];

$novoAutor = new Autor($nome, $cpf, $pagamento, $idade, $idbicicleta);

(new RepositorioCliente())->cadastrar($banco,$novoCliente);

header('Location: /'); // Redireciona para a página principal depois que cadastra