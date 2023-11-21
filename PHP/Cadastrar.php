<?php
require "./php/Conexao.php";
require "./php/Cliente.php";
require "./php/RepositorioCliente.php";

$nome = $_POST['txtNome'];
$cpf =  $_POST['txtCpf'];
$pagamento = $_POST['txtPagamento'];
$idade = $_POST['txtintIdade'];
$idbicicleta = $_POST['txtIdbicicleta'];
$email = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];

$novoClinte = new Cliente($nome, $cpf, $pagamento, $idade, $idbicicleta, $email, $senha);

(new RepositorioCliente())->cadastrar($banco,$novoCliente);

header('Location: /');