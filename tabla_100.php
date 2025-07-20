<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabla 10x10</title>
  <style>
    table { border-collapse: collapse; margin: auto; }
    td { border: 1px solid #000; padding: 10px; text-align: center; width: 50px; }
  </style>
</head>
<body>
  <h1 style="text-align:center;">Tabla del 1 al 100</h1>
  <table>
    <?php
      $num = 1;
      for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
          echo "<td>$num</td>";
          $num++;
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
