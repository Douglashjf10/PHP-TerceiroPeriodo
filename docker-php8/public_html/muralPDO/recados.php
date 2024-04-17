<?php

if (isset($_GET{"excluir"})):
    $id = $_GET["excluir"];
    $sql = "DELETE FROM tads.recados WHERE id=id;";
    
    $stmt = $con->prepare($sql);
    $stmt->bindValue(':id', $id);

    if ($stmt->execute()):
        
?>
    <p>Registro Excluido!</p>
<?php        
    endif;
endif;

require_once "RecadoDAO.php";

$sql = 'SELECT id, nome, email, cidade, texto FROM tads.recados;';

if ($result = $con->query($sql)): 
    if ($result->rowCount() > 0): 
?>

<table border = 1>
    <tr>
        <th>nome</th>
        <th>email</th>
        <th>Cidade</th>
        <th>Recado</th>
    </tr>

<?php
    $result->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'RecadoDAO');
    while ($recado = $result->fetch()): 
        $recado->imprimeTabela();
    endwhile;

?>
    </table>

<?php
    else:
?>
    <p>Nenhum registro encontrado!</p>
<?php
    endif;
endif;

