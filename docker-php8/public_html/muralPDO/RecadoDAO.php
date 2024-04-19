<?php
    require_once "Recado.php";
    require_once "InterfaceDAO.php";

class RecadoDAO extends Recado implements InterfaceDAO{

    public function criar($dados, $nome, $email, $cidade, $texto){

            $con = Database::getConnection();
            $sql = "INSERT INTO tads.recados
            (nome, email, cidade, texto)
            VALUES(:nome, :email, :cidade, :texto);";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':email',$email);
            $stmt->bindValue(':cidade',$cidade);
            $stmt->bindValue(':texto',$texto);
            $stmt->execute();
    }

    public function deletar($id){
        $con = Database::getConnection();
        $sql = "DELETE FROM tads.recados WHERE id=:id;";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(':id',$id);
        return $stmt->execute();
    }

    public function buscar($id){
        $con = Database::getConnection();
        $sql = "SELECT id, nome, email, cidade, texto FROM tads.recados WHERE id=id:";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'RecadoDAO');
        return $stmt->fetch();
    }

    public function buscarTodos(){
        $con = Database::getConnection();
        $sql = "SELECT id, nome, cidade, texto FROM tads.recados";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'RecadoDAO');
        return $stmt->fetchAll();
    }

    public function atualizar($id, $dados){
        global $nome;
        global $email;
        global $cidade;
        global $texto;

            $con = Database::getConnection();
            $sql = "UPDATE tads.recados SET nome=:nome, email=:email, cidade=:cidade, texto=:texto WHERE id=:id";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':id',$id);
            $stmt->bindValue(':nome',$nome);
            $stmt->bindValue(':email',$email);
            $stmt->bindValue(':cidade',$cidade);
            $stmt->bindValue(':texto',$texto);
            $stmt->execute();

    }


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
