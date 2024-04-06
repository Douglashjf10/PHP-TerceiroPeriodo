<?php

require_once "Database.php";

$db = new Database();

$con = $db->getConnection();


$sql =  'SELECT matricula, id, nome  FROM tads.alunos;';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <table border=1>
            <th>ID</th>
            <th>Nome</th>
            <th>matricula</th>
<?php
if ($result = $con->query($sql)): 
    while ($row = $result->fetch_object()):
?>
    <tr>
        <td><?= $row->id?></td>
        <td><?= $row->nome?></td>
        <td><?= $row->matricula?></td>
    </tr>
<?php
    endwhile;
endif;
?>
    </table>
</body>
</html>



<?php

$db->closeConnection();

?>
