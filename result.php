<?php
function calcularAmortizacion($dias, $tasaInteres) {
  // Calcular el monto del préstamo utilizando la fórmula:
  // monto = tasaInteres * dias / 365
  $monto = $tasaInteres * $dias / 365;

  // Calcular el valor de la amortización utilizando la fórmula:
  // amortizacion = monto / dias
  $amortizacion = $monto / $dias;

  // Devolver el valor de la amortización
  return $amortizacion;
}
