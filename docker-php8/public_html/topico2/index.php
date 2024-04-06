<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php?id=<?=$_POST["userId"]?>" method="post">

        <input type="text" name="nome"> <br>
        <input type="radio" name="estCivil" value="Solteiro"> Solteiro
        <input type="radio" name="estCivil" value="Casado"> Casado 
        <br>

        <select name="selEstado">
            <option value="RJ">Rio de Janeiro</option>
            <option>Minas Gerais</option>
            <option>São Paulo</option>
            <option>Rio Grande do Sul</option>
            <option>Bahia</option>
        </select><br>

        <input type="checkbox" name="extras[]" value="Garagem">Garagem<br>
        <input type="checkbox" name="extras[]" value="Piscina">Piscina<br>
        <input type="checkbox" name="extras[]" value="Jardim">Jardim<br>
        <input type="hidden" name="id" value="1234">
        <input type="hidden" name="userId" value="<?= $_POST["userId"]??""?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
