<?php 

    //EJERCICIO 2

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { //verifica si el formulario se ha enviado usando el metodo POST
        $precio2 = $_POST['precio2']; //Se guarda en la variable $precio, el valor que se puso en el formulario
        $gastos_envio=0; //se inicia en 0.
        // Dependiendo de los precios los gastos de envio cuestan más o menos.
        switch (true){
            case($precio2 <50): 
                $gastos_envio += 3.95;
                break;

            case($precio2>=50 && $precio2 <75):
                $gastos_envio += 2.95;
                break;

            case($precio2>=75 && $precio2 <100):
                $gastos_envio += 1.95;
                break;
    }
        echo "Los gastos de envío son: €" . number_format($gastos_envio, 2); //Muestra los gastos de envio con dos decimales
    }
?>