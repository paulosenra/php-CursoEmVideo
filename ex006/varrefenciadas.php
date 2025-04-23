<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercicio de Váriaveis Referenciadas</title>
</head>
<body>
    <div>
     <?php
      $a = 3;
      $b = $a;
      $b += 5;
      echo "A variavel A vale $a";
      echo "<br> A variavel B vale $b";
      echo "<br>A variavel B Referenciando A";
      $a = 3;
      $b = &$a;
      $b += 5;
      echo "<br>A variavel A vale $a";
      echo "<br> A variavel B vale $b";
     ?>
    </div>
</body>
</html>