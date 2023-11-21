<?php
class Cliente {
    private $nome;
    private $cpf;
    private $pagamento;
    private $idade;
    private $idbicicleta;
    private $email;
    private $senha;

    public function __construct(string $nome, string $cpf, string $pagamento, string $idade, string $idbicicleta, string $email, string $senha) {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setPagamento($pagamento);
        $this->setIdade($idade);
        $this->setIdbicicleta($idbicicleta);
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function setPagamento($pagamento) {
        $this->pagamento = $pagamento;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setIdbicicleta($idbicicleta) {
        $this->idbicleta = $idbicicleta;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function getPagamento() {
        return $this->pagamento;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getIdbicicleta() {
        return $this->idbicicleta;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getSenha() {
        return $this->senha;
    }
}