# funcion en php que calcule la amortizacion de un prestamo en PHP

Función en PHP que calcule la amortización de un préstamo ingresando el tiempo en días y la tasa de interés

La función recibe dos parámetros: el tiempo en días y la tasa de interés del préstamo. Utiliza estos valores para calcular el monto y la amortización del préstamo utilizando las fórmulas indicadas en el código. Finalmente, devuelve el valor de la amortización.

Para utilizar esta función, se puede llamarla pasando los valores deseados para el tiempo y la tasa de interés.

En este caso, se está calculando la amortización de un préstamo de 180 días con una tasa de interés del 5%. La función devolverá el valor de la amortización, que se puede utilizar en el código PHP como se desee.

Ejemplo: <code>$amortizacion = calcularAmortizacion(180, 0.05);</code>

En <code>result2.php</code> se muestran los resultados por día en una tabla HTML.

La función recibe dos parámetros: el tiempo en días y la tasa de interés del préstamo. Utiliza estos valores para calcular el monto y la amortización del préstamo utilizando las fórmulas indicadas en el código. Luego, crea una tabla HTML y utiliza un bucle for para calcular y mostrar el valor de la amortización por día. Finalmente, devuelve la tabla HTML como resultado.

Para utilizar esta función, se puede llamarla pasando los valores deseados para el tiempo y la tasa de interés

<code>$tablaAmortizacion = calcularAmortizacion(180, 0.05);</code>

En este caso, se está calculando la amortización de un préstamo de 180 días con una tasa de interés del 5%. La función devolverá una tabla HTML que muestra los valores de la amortización por día, que se pueden mostrar en la página web utilizando código PHP adicional. Por ejemplo:

<code>echo $tablaAmortizacion;</code>

Este código muestra la tabla HTML en la página web, permitiendo que el usuario vea los resultados de la funcion.
