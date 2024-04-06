<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Patinhos</h1>
    <?php
        $patinho = 99;
        while ($patinho >= 1) : 
           
    ?>
    <p>
        <?= $patinho?> Foram passar <br>
        Além, das montanhas para brincar<br>
        A mamãe gritou: Quá, Quá, Quá, Quá <? for ($i=0; $i < $patinho; $i++) { echo ", Quá"; } ?>
        <br>
        Mas Só <?= $patinho -1 ?> Patinhos voltaram de lá
    </p>
    <?php
    $patinho --;
    endwhile;
    ?>

</body>
</html>