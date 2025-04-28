<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $t = "Aqui tem um texto gigante que mostra a função do Wordwrap de php e ver como funcionar na prática";
        $r = wordwrap($t, 30, "<br>\n");
        echo $r;
    ?>
</div>
</body>
</html>
 