<?php 
class Repositorio {
    public function cadastrar(PDO $banco, Cliente $cliente) {
        $sqlInsert = "INSERT INTO CLIENTE(nome,cpf,pagamento,idade,idbicicleta) VALUES (:n, :c, :p, :i, :id)";
        $insert = $banco->prepare($sqlInsert);

        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $pagamento = $cliente->getPagamento();
        $idade = $cliente->getIdade();
        $bicicleta = $cliente->getIdbicicleta();

        $insert->bindParam(":n", $nome);
        $insert->bindParam(":c", $cpf);
        $insert->bindParam(":p", $pagamento);
        $insert->bindParam(":i", $idade);
        $insert->bindParam(":id", $idbicicleta);
    }
}