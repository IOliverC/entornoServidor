<?php 

    //EJERCICIO 1

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { //verifica si el formulario se ha enviado usando el metodo POST
        $precio = $_POST['precio']; //Se guarda en la variable $precio, el valor que se puso en el formulario
        $gastos_envio=0; //se inicia en 0.
        // Dependiendo de los precios los gastos de envio cuestan más o menos.
        if($precio <50){ 
            $gastos_envio += 3.95;
        }elseif($precio>=50 && $precio <75){
            $gastos_envio += 2.95;
        }elseif($precio>=75 && $precio <100){
            $gastos_envio += 1.95;
        }else{

        }
        echo "Los gastos de envío son: €" . number_format($gastos_envio, 2); //Muestra los gastos de envio con dos decimales
    }

