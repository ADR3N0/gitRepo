<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=“es">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Practica 3</title>
</head>

<body>
<h1 style=text-align:center;>Manejo de variables en PHP</h1>
<br/>

<h3>1. Determina cuál de las siguientes variables son válidas y explica por qué:</h3>
<ul><li>El formato <b>$_myvar</b> SÍ funciona porque iniciar con un guión bajo es válido
(underscore) así como usar minusculas del abecedario.</li>
<li>El formato <b>$myvar</b> SÍ funciona porque está permitido usar minusculas del abecedario.</li>
<li>El formato <b>$_7var</b> SÍ funciona porque iniciar con un guión bajo es válido 
(underscore) así como usar numeros y minusculas del abecedario.</li>
<li>El formato <b>$var7</b> SÍ funciona porque está permitido usar numeros y minusculas del 
abecedario.</li>
<li>El formato <b>$_element1,</b> SÍ funciona porque iniciar con un guión bajo es válido 
(underscore) así como usar numeros y minusculas del abecedario.</li></ul>
<ul><li>El formato <b>myvar</b> NO funciona porque no está declarado como una variable usando
el simbolo de dolar <b>$</b>.</li>
<li>El formato <b>$house*5</b> NO funciona porque el simbolo <b>*</b> no es parte del 
codigo ASCII extendido (del 127 al 255).</li></ul>
<p><b>Nota: </b>Iniciar el nombre de una variable con un número NO es valido.</p>

<h3>2. Proporcionar los valores de $a, $b, $c como sigue:</h3>
<?php
$a = "ManejadorSQL"; $b = 'MySQL'; $c = &$a;
echo "<b>a) Contenido en las variables:</b><ul>$a</br>$b</br>$c</ul>";
echo "<b>b) Se realiza la nueva asignación en el código PHP.</b></br></br>";
$a = "PHP server";$b = &$a;
echo "<b>c) Contenido en las variables despues del cambio:</b><ul>$a</br>$b</br>$c</ul>";
echo "<b>d) Explicación:</b><ul><span>A la variable 'a' se le asigna la cadena 'PHP server',
 las variables 'b' y 'c' hacen referencia al valor contenido en la variable 'a' lo cual 
 ocaciona que todas las variables muestren el mismo valor.</span></ul>";
unset($a,$b,$c);
?>

</body>
</html>