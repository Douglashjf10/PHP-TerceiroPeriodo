<?php

global $con;
if (isset($_GET{"excluir"})):
    $id = $_GET["excluir"];
    $sql = "DELETE FROM tads.recados WHERE id=$id;";
    if ($result = $con->query($sql)):
?>
    <p>Registro Excluido!</p>
<?php
    endif;
endif;

require_once "RecadoDAO.php";

$sql = 'SELECT id, nome, email, cidade, texto FROM tads.recados;';

if ($result = $con->query($sql)):
    if ($result->num_rows > 0):
?>

<table border = 1>
    <tr>
        <th>nome</th>
        <th>email</th>
        <th>Cidade</th>
        <th>Recado</th>
    </tr>

<?php
    while ($recado = $result->fetch_object()):
        var_dump($recado);
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

