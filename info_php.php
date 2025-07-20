<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PHP Info</title>
  <style>
    body { text-align: center; }
  </style>
</head>
<body>
  <h1>Información de PHP</h1>
  <div style="text-align: center;">
    <?php
      ob_start();
      phpinfo();
      $pinfo = ob_get_contents();
      ob_end_clean();
      echo "<div style='text-align:left; display: inline-block;'>$pinfo</div>";
    ?>
  </div>
</body>
</html>
