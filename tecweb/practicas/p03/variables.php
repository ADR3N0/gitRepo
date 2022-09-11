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
echo "<b>a) Contenido en las variables:</b><ul>a = $a</br>b = $b</br>c = $c</ul>";
echo "<b>b) Se realiza la nueva asignación en el código PHP.</b></br></br>";
$a = "PHP server";$b = &$a;
echo "<b>c) Contenido en las variables despues del cambio:</b><ul>a = $a</br>b = $b</br>c = $c</ul>";
echo "<b>d) Explicación:</b><ul><span>A la variable 'a' se le asigna la cadena 'PHP server',
las variables 'b' y 'c' hacen referencia al valor contenido en la variable 'a' lo cual 
ocaciona que todas las variables muestren el mismo valor.</span></ul>";
unset($a,$b,$c);
?>

<h3>3. Muestra el contenido de cada variable inmediatamente después de cada asignación,
verificar la evolución del tipo de estas variables (imprime todos los componentes de los
arreglos):</h3>
<?php
$a = "PHP5";
echo 'Asignación: $a = "PHP5";',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>a = </b>"; var_dump($a);echo "</br></br>";
$z[] = &$a;
echo 'Asignación: $z[] = &$a;',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>z = </b>"; print_r($z);echo "</br></br>";
$b = "5ta version de PHP";
echo 'Asignación: $b = “5a version de PHP”;',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>b = </b>"; var_dump($b);echo "</br></br>";
$c = $b*10;
echo 'Asignación: $c = $b*10;',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>c = </b>"; var_dump($c);echo "</br></br>";
$a .= $b;
echo 'Asignación: $a .= $b;',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>a = </b>"; var_dump($a);echo "</br></br>";
$b *= $c;
echo 'Asignación: $b *= $c;',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>b = </b>"; var_dump($b);echo "</br></br>";
$z[0] = "MySQL";
echo 'Asignación: $z[0] = "MySQL";',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>z = </b>"; print_r($z);echo "</br></br>";
?>

<h3>4. Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
la matriz $GLOBALS o del modificador global de PHP.</h3>
<?php
echo '"a" en el ámbito global: ' . $GLOBALS['a'] . "</br>";
echo '"z" en el ámbito global: ' . $GLOBALS['z'] . "</br>";
echo '"b" en el ámbito global: ' . $GLOBALS['b'] . "</br>";
echo '"c" en el ámbito global: ' . $GLOBALS['c'] . "</br>";
unset($a,$z,$b,$c);
?>

<h3>5. Dar el valor de las variables $a, $b, $c al final del siguiente script:</h3>
<?php
$a = "7 personas";
echo 'Asignación: $a = "7 personas";',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>a = </b>",$a,"</br></br>";
$b = (integer) $a;
echo 'Asignación: $b = (integer) $a;',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>b = </b>",$b,"</br></br>";
$a = "9E3";
echo 'Asignación: $a = "9E3";',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>a = </b>",$a,"</br></br>";
$c = (double) $a;
echo 'Asignación: $c = (double) $a;',"</br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resultado: <b>c = </b>",$c,"</br></br>";
unset($a,$b,$c);
?>

</body>
</html>