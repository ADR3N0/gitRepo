<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
    <style type="text/css">
      ol { 
      list-style-type: none;
      }
    </style>
</head>

<body>
    <?php
    require_once __DIR__.'/src/funciones.php';
    ?>

    <div>
        <h3>Ejercicio 1</h3>
        <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
        <p>
            R:
            <?php
            
            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 2</h3>
        <p>
            Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia compuesta por:
            <br><strong>impar, par, impar</strong>
        </p>
        <p>
            R: </br>
            <?php

            ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 3</h3>
        <p>Utiliza un ciclo <strong>while</strong> para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
        <p>
        <strong>Ciclo While R:</strong>

        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 4</h3>
        <p>Crear un arreglo cuyos <strong>índices</strong> van de 97 a 122 y cuyos <strong>valores</strong> son las letras de la 'a' a la 'z'. Usa la función <strong>chr(n)</strong> que devuelve el caracter cuyo código ASCII es <strong>n</strong> para poner el valor en cada índice. Es decir:</p>
        <p>
            [97] => a <br>
            [98] => b <br>
            [99] => c <br>
            … <br>
            [122] => z
        </p>
        <p>
            R:
            <?php

            ?>
        </p>
    </div>
    <div>
        <h3>Ejercicio 5</h3>
        <p>
            Usar las variables <strong>$edad</strong> y <strong>$sexo</strong> en una instrucción if para identificar una persona de sexo "femenino", 
            cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado. Por ejemplo:
        </p>
        <p>
            <em>Bienvenida, usted está en el rango de edad permitido.</em>
        </p>
        <p>
            En caso contrario, deberá devolverse otro mensaje indicando el error.
        </p>
        <ul>
            <li>Los valores para $edad y $sexo se deben obtener por medio de un formulario en HTML.</li>
            <li>Utilizar el la Variable Superglobal $_POST (revisar documentación).</li>
        </ul>
        </p>
        <p>
            R:

        </p>
    </div>
    <div>
        <h3>Ejercicio 6</h3>
        <p>
        Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
        una ciudad. Cada vehículo debe ser identificado por:
        </p>
        <ul>
            <li>Matricula.</li>
            <li>Auto (Marca, Modelo, Tipo)</li>
            <li>Propietario (Nombre, Ciudad, Dirección)</li>
        </ul>
        <p>
        La matrícula debe tener el siguiente formato LLLNNNN, donde las L pueden ser letras de
        la A-Z y las N pueden ser números de 0-9.
        </br>
        Usa print_r para mostrar la estructura general del arreglo.
        </p>
        <p>
            R:
            <?php

            ?>
        </p>
    </div>
</body>
</html>