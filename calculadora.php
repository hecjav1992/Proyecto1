<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora</title>
</head>
<body>
  <h1 style="text-align:center;">Operaciones Aritméticas</h1>
  <form method="post" style="text-align:center;">
    Valor 1: <input type="number" name="num1" required> <br><br>
    Valor 2: <input type="number" name="num2" required> <br><br>
    <input type="submit" value="Calcular">
  </form>

  <?php
  function operaciones($a, $b) {
    return [
      'Suma' => $a + $b,
      'Resta' => $a - $b,
      'Multiplicación' => $a * $b,
      'División' => $b != 0 ? $a / $b : "No se puede dividir por cero",
      'Módulo' => $b != 0 ? $a % $b : "No se puede obtener el módulo de cero"
    ];
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $resultados = operaciones($num1, $num2);

    echo "<h2>Resultados:</h2><ul>";
    foreach ($resultados as $operacion => $resultado) {
      echo "<li><strong>$operacion:</strong> $resultado</li>";
    }
    echo "</ul>";
  }
  ?>
</body>
</html>
