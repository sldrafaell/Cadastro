<?php 
class Repositorio {
    public function cadastrar(PDO $banco, Cliente $cliente) {
        $sqlInsert = "INSERT INTO CLIENTE(nome,cpf,pagamento,idade,bicicleta) VALUES (:n, :c, :p, :i, :b)";
        $insert = $banco->prepare($sqlInsert);

        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $pagamento = $cliente->getPagamento();
        $idade = $cliente->getidade();
        $bicicleta = $cliente->getBicicleta();

        $insert->bindParam(":n", $nome);
        $insert->bindParam(":c", $cpf);
        $insert->bindParam(":p", $pagamento);
        $insert->bindParam(":i", $idade);
        $insert->bindParam(":b", $bicicleta);
    }
}