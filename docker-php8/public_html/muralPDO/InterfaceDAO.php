<?php

interface InterfaceDAO{

    public function criar($dados);
    public function deletar($id);
    public function buscar($id);
    public function buscarTodos();
    public function atualizar($id, $dados);
}