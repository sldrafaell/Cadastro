<?php
class Cliente {
    private $nome;
    private $cpf;
    private $pagamento;
    private $idade;
    private $idbicicleta;

    public function __construct($nome, $cpf, $pagamento, $idade, $idbicicleta) {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setPagamento($pagamento);
        $this->setIdade($idade);
        $this->setIdbicicleta($idbicicleta);
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
    public function setidbicicleta($idbicicleta) {
        $this->idbicleta = $idbicicleta;
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
}