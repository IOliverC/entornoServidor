<?php

    //EJERCICIO 4

    $matriz = array( //Inicio una raiz
        array(3, 1),
        array(2, 0)
    );

    foreach ($matriz as $fila) { //Recorre cada fila
        foreach ($fila as $valor) { //Recorre cada columna
            echo $valor . "  "; //Muestra la matriz por pantalla
        }
        echo "<br>";
    }
    ?>
