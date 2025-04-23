<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Cartório Eleitoral</title>
</head>
<body>
    <div>
        <?php
         $ano = $_GET["an"];
         $idade = 2026 - $ano;
         echo "Quem nasceu em $ano tem idade de $idade anos.";
         $tipo = ($idade>=18 && $idade<65)? "Obrigatório":"Não Obrigatório";
         echo " <br>E dessa forma seu voto é $tipo";

        ?>
    </div>
</body>
</html>