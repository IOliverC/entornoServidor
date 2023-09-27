<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserción de código en páginas web</title>
</head>
<body>
    <?php
        echo "<h1> <u> Inserción de código en páginas web </u> </h1>";

        echo "<h3> 1.- Crea un archivo PHP para ejecutar en nuestro servidor XAMPP que muestre
        por pantalla lo siguiente: </h3>";
        echo "<h3> <ul> <li>Variable de tipo String con valor “Hola” concatenada a un espacio y concatenada a una variable de tipo String con valor “Mundo”. Guarda la concatenación en una nueva variable.</li></h3>";

        $var1= 'Hola '; // Variable de tipo String
        $var2= 'Mundo'; // Variable de tipo String
        $concatenacion = $var1. '  ' . $var2; //Concatenación de dos variables de tipo String + un espacio.
        echo $concatenacion; // Muestra la concatenación por pantalla.

        echo "<h3><ul><li>Variable de tipo boolean con valor “true”.</li></h3>"; 

        $varBoolean=true; // Variable de tipo boolean.
        echo $varBoolean; // Muestra el valor de la variable de tipo boolean por pantalla.

        echo "<h3><ul><li>Variable de tipo float con valor “3,14”.</li></h3>";

        $varFloat=3.14; // Variable de tipo float.
        echo $varFloat; // Muestra el valor de la variable por pantalla.

        echo "<h3><ul><li>Variable de tipo array que contenga los valores “1”, “2” y “3” y
        tengan como clave valor1, valor2 y valor3 respectivamente.</li></ul></h3>";

        $varArray = array("valor1" => "1", "valor2" => "2", "valor3" => "3"); // Variable de tipo array con sus respectivas claves.
        print_r($varArray); // Muestra el contenido de un array por pantalla.

        echo "<br>";
        echo "<br>";

        echo "<h3> 2.- Cambia la variable de tipo boolean a valor “false”. Muestra el resultado
        obtenido al ejecutarlo con el servidor. ¿Qué ocurre y por qué? </h3>";

        $varBoolean=false; // Variable de tipo boolean.
        echo $varBoolean; // Muestra el valor de la variable por pantalla.

        echo "No se observa nada puesto que el valor de la variable de tipo boolean se cambió a false, lo que implica que ahora es 0 en vez de 1. 
        False se representa como una cadena vacía al imprimir en pantalla.";

        echo "<br>";
        echo "<br>";

        echo "<h3> 3.- Elimina los espacios de la variable concatenada utilizando la función
        correspondiente. </h3>";

        $sinEspacios= str_replace(" " , "", $concatenacion); // Elimina los espacios de la variable concatenada.
        echo "La cadena original es ".$concatenacion." y la cadena sin espacios es ".$sinEspacios; // Muestra la cadena original y la cadena sin espacios por pantalla.


        echo "<br>";
        echo "<br>";

        echo "<h3> 4.- Muestra por pantalla el siguiente mensaje: </h3>";
        $cadena4= "El operador “+” sirve para sumar el valor de variables. Con la “/” podemos
        dividir valores entre variables. El símbolo del dólar “\$” indica que estamos 
        utilizando variables pero no lo usaremos en las constantes o globales. " ; //Utilizando la barra \ para que se muestre el dolar en pantalla.

        echo $cadena4; // Muestra el mensaje por pantalla. 

        echo "<br>";
        echo "<br>";

        echo "<h3> 5.- Almacena la cadena anterior en una variable y usa la función
        correspondiente para indicar la longitud de la cadena. </h3>";

        $longitudCadena=strlen($cadena4); // Indica la longitud de la cadena.
        echo "La longitud de la cadena es ".$longitudCadena; // Muestra la longitud de la cadena por pantalla.


        echo "<br>";
        echo "<br>";

        echo "<h3> 6.- Utiliza la función correspondiente para eliminar las vocales en la frase
        “Hello World”. </h3>";

        $vocales = array("a", "e", "i", "o", "u"); // Array con las vocales
        $sinVocales = str_replace($vocales, "", "Hello World"); // Elimina las vocales de la frase.

        echo "Hello World sería la frase con vocales y sin vocales se vería así: <u>".$sinVocales, "</u>";
        

        echo "<br>";
        echo "<br>";

        echo "<h3> 7.- Crea una variable sin contenido y usa la función correspondiente para
        comprobar si está vacía. ¿Qué ocurre y por qué? </h3>";


        $vacia;
        echo empty ($vacia); // Comprueba si la variable está vacía, si es que si, sale por pantalla un 1.
        echo "<br>";
        echo "<br>";

        echo "Comprueba si la variable está vacía, si es que sí, sale por pantalla un 1. Recordemos
        que si una variable está vacía, sale true, y true es igual a 1. Si no, sale por pantalla un 0 que es igual a false.";
        
        echo "<br>";
        echo "<br>";

        echo "<h3> 8.- Convierte la variable que contiene la frase “Hello World” y conviértela en
        entero. ¿Qué ocurre y por qué?</h3>";

        settype($concatenacion, 'integer'); // Convierte la variable concatenada a entero.
        echo $concatenacion; 

        echo "<br>";
        echo "<br>";

        echo "Sale 0 porque la variable concatenada no puede identificarse como un numero al principio
        de la cadena, entonces PHP asume un valor predeterminado el cual sería 0. ";

        echo "<br>";
        echo "<br>";

        echo "<h3> 9.-Crea programas que calcule lo siguiente: </h3>";
        echo "<h3> <ul> <li>La raíz cuadrada de 144.</li></h3>";

        $raizCuadrada=sqrt(144); // La raíz cuadrada de 144.
        echo $raizCuadrada; // Muestra la raíz cuadrada por pantalla.

        echo "<h3><ul><li>La potencia 2^8</li></h3>";

        $potencia = pow(2, 8); // La potencia 2^8.
        echo $potencia; // Muestra la potencia por pantalla.

        echo "<h3><ul><li>El resto de la división de 100/6.</li></h3>";

        $primerNumero=100; // Primer número.
        $segundoNumero=6; // Segundo número.
        $division= ($primerNumero % $segundoNumero); // El resto entre dos números.
        echo $division; // Muestra el resto por pantalla.

        echo "<h3><ul><li>El máximo común divisor de 3 y 6</li></ul></h3>";

        function mcd($a, $b){ // Función que devuelve el máximo común divisor de dos números enteros.
            if($b==0)   //Si es igual a 0 signica que hemos enconrado el MCD, ya que cualquier numero dividido por 0 es igual al numero mismo.
                return $a; //Devuelve el primer número.
            else // Si no es igual a 0 signica que no hemos encontrado el MCD, por lo cual probamos con else.
                return mcd($b, $a % $b); //Devuelve el resto de la división entre el primer número y el segundo número. Entrando en un bucle para estar más cerca de encontrar el MCD. Continua hasta que $b sea igual a 0.
        }
        echo ("El máximo común divisor de 3 y 6 es: ".mcd(3, 6)); // Devuelve el máximo común divisor de 3 y 6.

        echo "<br>";
        echo "<br>";

    ?>
</body>
</html>