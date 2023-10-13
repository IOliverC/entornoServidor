<?php 

    //EJERCICIO 5

    $matriz1 = array( //Definimos la primera matriz
        array(1, 0),
        array(0, 1)
    );
    
    $matriz2 = array( //Definimos la segunda matriz
        array(0, 1),
        array(1, 0)
    );
    
    $resultado = array(); //Iniciamos un array vacio.
    
    for ($i = 0; $i < count($matriz1); $i++) { //Recorre cada fila de la matriz 
        for ($j = 0; $j < count($matriz1[$i]); $j++) { //Recorre cada columna de la matriz
            $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j]; //Se suma y se almacena en el array vacio.
        }
    }
    
    foreach ($resultado as $fila) { //cada fila de la matriz resultado
        foreach ($fila as $valor) { //ahora cada columna
            echo $valor . " "; //valor de la matriz resultado.
        }
        echo "<br>";
    }
?>
    

