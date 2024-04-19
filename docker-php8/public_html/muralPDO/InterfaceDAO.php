<?php

interface InterfaceDAO{

    public function criar($dados, $nome, $email, $cidade, $texto);
    public function deletar($id);
    public function buscar($id);
    public function buscarTodos();
    public function atualizar($id, $dados);
}
