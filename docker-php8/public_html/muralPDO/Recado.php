<?php

class Recado {
    private $id;
    public $nome;
    public $email;
    public $cidade;
    public $texto;

    function imprimeLinhaTabela(){
        echo "
        <tr>\n
            <td> {$this->nome} </td>\n
            <td> {$this->email} </td>\n
            <td> {$this->cidade} </td>\n
            <td> {$this->texto} </td>\n
            <td> <a href=\"index.php?excluir={$this->nome}\">X</a></td>
        </tr>\n
        ";
    }
}
