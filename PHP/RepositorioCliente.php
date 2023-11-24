<?php

class RepositorioCliente {

    public function cadastrar(PDO $banco, Cliente $cliente)
    {
        $sqlInsert = "INSERT INTO Cliente(nome,cpf,pagamento,idade,idbicicleta,email,senha) VALUES (:n,:c,:p,:i,:id,:e,:s)";

        $insert = $banco->prepare($sqlInsert);

        $nome = $cliente->exibirNome();
        $cpf = $cliente->exibirCpf();
        $pagamento = $cliente->exibirPagamento();
        $idade = $cliente->exibirIdade();
        $idbicicleta = $cliente->exibirIdbicicleta();
        $email = $cliente->exibirEmail();
        $senha = $cliente->exibirSenha();

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