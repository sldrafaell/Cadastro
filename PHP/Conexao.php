<?php

try {
    $banco = new PDO("sqlite:../banco.sqlite");
    echo "Banco conectado";

} catch (PDOException $e) {
    echo "[ERRO] Não foi possivel conectar o banco";
    echo $e->getMessage();
}

$tabela = "CREATE TABLE IF NOT EXISTS CLIENTE(
    nome TEXT,
    cpf TEXT,
    pagamento FLOAT,
    idade INT,
    idbicicleta INT,
    primary key(cpf)
)";

$banco->query($tabela);