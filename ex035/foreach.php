<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <table border="1">
      <tr>
        <?php
            $n = range(5,20,5);
            foreach($n as $v) {
              echo "<td>$v </td>";
            }
        
        ?>
      </tr>
      </pre>
    </table>
</div>
</body>
</html>
 