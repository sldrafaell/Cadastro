<?php

class RepositorioCliente
{
    
    public function cadastrar(PDO $banco, Cliente $cliente)
    {
        $sqlInsert = "INSERT INTO Cliente(nome,cpf,pagamento,idade,idbicicleta,email,senha) VALUES (:n,:c,:p,:i,:id,:e,:s)";

        $insert = $banco->prepare($sqlInsert);

        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $pagamento = $cliente->getPagamento();
        $idade = $cliente->getIdade();
        $idbicicleta = $cliente->getIdbicicleta();
        $email = $cliente->getEmail();
        $senha = $cliente->getSenha();

        $insert->bindParam(":n", $nome);
        $insert->bindParam(":c", $cpf);
        $insert->bindParam(":p", $pagamento);
        $insert->bindParam(":i", $idade);
        $insert->bindParam(":id", $idbicicleta);
        $insert->bindParam(":e", $email);
        $insert->bindParam(":s", $senha);
        

        $insert->execute();
    }

    public function exibirTudo(PDO $banco){
        $sql = "SELECT * FROM CLIENTE";
        $dado = $banco->query($sql); 
        return $dado->fetchAll(PDO::FETCH_ASSOC);
    }
}