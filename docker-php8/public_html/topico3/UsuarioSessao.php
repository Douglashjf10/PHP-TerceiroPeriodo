<?php
class UsuarioSessao{
    public $login;
    public $nome;

    public function salvar(string $nome){
        $this -> nome = $nome;
        echo "<p> salvar </p>";
    }

    public function ler():string{
        echo "<p> ler UsuarioSessao </p>";

        return $this->nome;
        
    }

    public function __construct(?string $login, ?string $nome) {
        $this->login = $login;
        $this->nome = $nome;
        echo "<p> Novo objeto </p>";
    }
}