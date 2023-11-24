<?php
class Cliente {
    private $nome;
    private $cpf;
    private $pagamento;
    private $idade;
    private $idbicicleta;
    private $email;
    private $senha;

    public function __construct(string $n, string $c, string $p, string $i, string $ib, string $e, string $s) {
        $this->definirNome($n);
        $this->definirCpf($c);
        $this->definirPagamento($p);
        $this->definirIdade($i);
        $this->definirIdbicicleta($ib);
        $this->definirEmail($e);
        $this->definirSenha($s);
    }
    public function definirNome($n) {
        $this->nome = $n;
    }
    public function definirCpf($c) {
        $this->cpf = $c;
    }
    public function definirPagamento($p) {
        $this->pagamento = $p;
    }
    public function definirIdade($i) {
        $this->idade = $i;
    }
    public function definirIdbicicleta($ib) {
        $this->idbicicleta = $ib;
    }
    public function definirEmail($e) {
        $this->email = $e;
    }
    public function definirSenha($s) {
        $this->senha = $s;
    }

    public function exibirNome() {
        return $this->nome;
    }
    public function exibirCpf() {
        return $this->cpf;
    }
    public function exibirPagamento() {
        return $this->pagamento;
    }
    public function exibirIdade() {
        return $this->idade;
    }
    public function exibirIdbicicleta() {
        return $this->idbicicleta;
    }
    public function exibirEmail() {
        return $this->email;
    }
    public function exibirSenha() {
        return $this->senha;
    }
}