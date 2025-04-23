<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual e identico</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
         $a = 3;
         $b = "3";
         $r = ($a === $b) ? "SIM"  : "NÃO";
         echo  "As variáveis A e B são iguais? <br> $r";
        ?>
    </div>
</body>
</html>