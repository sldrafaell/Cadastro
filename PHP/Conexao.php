<?php

try{
    $banco = new PDO("sqlite:dado.sqlite");

}catch(PDOException $e){ 
    echo "[ERRO] O banco não pode ser conectado! ";
    echo $e->getMessage();
}

$criarTabela = "CREATE TABLE IF NOT EXISTS CLIENTE(
    nome TEXT,
    cpf TEXT,
    pagamento TEXT,
    idade TEXT,
    idbicicleta TEXT,
    email TEXT,
    senha TEXT,
    primary key (idbicicleta))";

$banco->query($criarTabela);