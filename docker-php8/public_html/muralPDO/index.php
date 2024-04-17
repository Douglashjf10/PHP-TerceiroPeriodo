<?php

require_once "Database.php";
require_once "recados.php";
require_once "formulario.php";

$db = new Database();

$con = $db->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
    </div>
    <div class="recados">
    </div>        
</body>
</html>
<?php

$db->closeConnection();
