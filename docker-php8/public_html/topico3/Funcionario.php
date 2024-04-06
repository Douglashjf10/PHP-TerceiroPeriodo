<?php
require_once("Pessoa.php");
require_once "web.php";

class Funcionario extends Pessoa {
    
    private int $matricula;
    
    public function __construct(float $salario, string $nome, int $matricula){
        parent:: __construct($salario, $nome);
        $this->matricula = $matricula;
    }

    public function __destruct() {
        echo "Destruindo o objeto {$this->nome}";
    }

    public function getSalario (): float {
        return $this->salario;
    }

    public function setSalario(float $valor){
        if ($valor >= 1000) {
            $this->salario = $valor;
        }
    }

    function setNome(string $nome) {
        $this->nome = $nome;
    }

    function getNome(): string {
        return $this->nome;
    }

    function imprime(){
        echo "<p> {$this->nome} </p>";
        echo "<p> {$this->salario} </p>";
        echo "<p> {$this->matricula} </p>";
    }
}

