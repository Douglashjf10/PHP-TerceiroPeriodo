<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <p>O nome é <?= $_POST["nome"] ?></p>
    <p>O estado civil é <?= $_POST["estCivil"] ?></p>
    <p>O estado é <?= $_POST["selEstado"] ?></p>
    <p>Os extras são: <br><br>
<?php
foreach ($_POST["extras"] as $extra): 
?>
    <?= $extra ?><br>

<?php
    endforeach
?>
</p>

<p>O userId é : <?= $_GET["id"] ?></p>
    
</body>
</html>
