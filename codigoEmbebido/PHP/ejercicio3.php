<?php 

    //EJERCICIO 3

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $numero1=$_POST["numero1"];
    $numero2=$_POST["numero2"];
    $numero3=$_POST["numero3"];
    $numero4=$_POST["numero4"];
    $numero5=$_POST["numero5"];   

    $numeros = [$numero1, $numero2, $numero3,$numero4, $numero5];
    $mayor = $numeros[0];

    for ($i = 1; $i < 5; $i++) {
        if ($numeros[$i] > $mayor) {
            $mayor = $numeros[$i];
        }
    }

    echo "El número mayor es: " . $mayor;
} 
?>

