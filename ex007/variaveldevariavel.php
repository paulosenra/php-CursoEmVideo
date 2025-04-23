<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variavel de Variáveis</title>
</head>
<body>
    <div>
        <?php
          $x =  "abc";
          $$x = "def";
          echo "O Conteudo da variavel X é $x";
          echo "<br>A variavel ABC criada recebeu p valor $abc";
        ?>
    </div>
</body>
</html>