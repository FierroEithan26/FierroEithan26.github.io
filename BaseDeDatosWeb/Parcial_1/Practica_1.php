<?php

    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $escuela = $_GET["escuela"];
    $lista = $_GET["lista"];
    $Profe = $_GET["profav"];
    //obtienen los valores

    if($edad > 18){
        echo "<h1>".$nombre." es mayor de edad</h1>";
    } else {
        echo "<h1>".$nombre." NO es mayor de edad</h1>";
    }
    
    echo "<h1>Nombre del Alumno: ".$nombre."</h1>";

    echo "<h2>Edad: ".$edad."</h2>";

    echo "<h2>Escuela: ".$escuela."</h2>";


    echo "<h2>Lista: ".$lista."</h2>";

    if($Profe == "Luis"){
        echo "<h1>Escogiste a ".$Profe." Carlos. bien hecho.</h1>";
    } else if($Profe == "Ibarra"){
        echo "<h1>ESCOGISTE A ".$Profe."???, TIENES ALGUN PROBLEMA?? </h1>";
    }else{
        echo "<h1>Escogiste a ".$Profe.". esta bien.</h1>";
    }

    //Imprimir el valor de esos campos

?>