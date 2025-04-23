<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercicio de Desconto</title>
</head>
<body>
    <div>
        <?php
         $preco = $_GET["p"];
         echo "O preço do produto é R$ " . number_format($preco, 2);
         $preco -= $preco*10/100;
         echo "<br>O novo preço com 10% de desconto será R$ " . number_format($preco, 2);
        ?>
    </div>
</body>
</html>