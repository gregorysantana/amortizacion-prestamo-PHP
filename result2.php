<?php
function calcularAmortizacion($dias, $tasaInteres) {
  // Calcular el monto del préstamo utilizando la fórmula:
  // monto = tasaInteres * dias / 365
  $monto = $tasaInteres * $dias / 365;

  // Calcular el valor de la amortización utilizando la fórmula:
  // amortizacion = monto / dias
  $amortizacion = $monto / $dias;

  // Crear una tabla HTML para mostrar los resultados
  $tabla = "<table>";
  $tabla .= "<tr><th>Día</th><th>Amortización</th></tr>";

  // Calcular y mostrar el valor de la amortización por día
  for ($i = 1; $i <= $dias; $i++) {
    $tabla .= "<tr><td>$i</td><td>$amortizacion</td></tr>";
  }

  // Cerrar la tabla HTML
  $tabla .= "</table>";

  // Devolver la tabla HTML como resultado
  return $tabla;
}


$tablaAmortizacion = calcularAmortizacion(180, 0.05);

echo $tablaAmortizacion;
