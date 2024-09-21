<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];

    //valida pregunta 1 1. ¿Como se llama el ALAN URI LUGO BRAZ?
    echo "<h3> ¿Como se llama el ALAN URI LUGO BRAZ? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = ALAN URI LUGO BRAZ</h5>";
    if($pregunta1 == "ALAN"){
        $aciertos++;
        echo "<img src='img\correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
    }

    //Valido pregunta 2 s una plataforma informática de lenguaje de programación creada por Sun Microsystems en 1995.
    echo "<h3> es un estudiante del cetis 107 y es un PENDEJO </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta2." ---- Correcta = ALAN URI LUGO BRAZ</h5>";
    if(strtoupper($pregunta2) == "ALAN URI LUGO BRAZ"){
        $aciertos++;
        echo "<img src='img\correcta.png' width='50px'><hr>";
    }else{
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
    }

    //Pregunta 3 - se deben validar 2 opciones sql y mongo
    echo "<h3> es un estudiante del cetis 107 y es un PENDEJO </h3>";
    $p3_respuestas_correctas = 0;


    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta3[$i] == "R6" || $pregunta3[$i] == "Valo"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='img\correcta.png' width='50px'><hr>";
        }else{
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
        }
        
    }

    echo "<h3> ¿Cuales son frases iconicas del sujeto ALAN URI LUGO BRAZ?</h3>";
    $p4_respuestas_correctas = 0;

    if(count($pregunta4) == 2){
        for($i=0; $i<count($pregunta4); $i++){
            if($pregunta4[$i] == "estasi" || $pregunta4[$i] == "estazi"){
                $p4_respuestas_correctas ++;
            }
        }
        if($p4_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='img\correcta.png' width='50px'><hr>";
        }else{
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
        }
        
    }

    echo "<h3> ¿Cual es el carro REGALADO que tiene ALAN URI LUGO BRAZ? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = versa</h5>";
    if($pregunta5 == "versa"){
        $aciertos++;
        echo "<img src='img\correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
    }


    echo "<h3> ¿Como se llama el gato del alan? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = gato</h5>";
    if($pregunta6 == "gato"){
        $aciertos++;
        echo "<img src='img\correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
    }

    echo "<h3>7. es el novio MAAAASSS gordo del alan</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta7." ---- Correcta = leonardo</h5>";
    if(strtoupper($pregunta7) == "leonardo"){
        $aciertos++;
        echo "<img src='img\correcta.png' width='50px'><hr>";
    }else{
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
    }

    echo "<h3>8. es lo que se reusa a quitarsela </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta8." ---- Correcta = la uniseja</h5>";
    if(strtoupper($pregunta8) == "la uniseja"){
        $aciertos++;
        echo "<img src='img\correcta.png' width='50px'><hr>";
    }else{
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
    }

    
    $p9_respuestas_correctas = 0;
    echo "<h3>9. ¿Por que sacaron del salon al alan y parte de la crew en la clase de ingles? </h3>";
    if(count($pregunta9) == 2){
        for($i=0; $i<count($pregunta9); $i++){
            if($pregunta9[$i] == "alan" || $pregunta9[$i] == "ardida"){
                $p9_respuestas_correctas ++;
            }
        }
        if($p9_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='img\correcta.png' width='50px'><hr>";
        }else{
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
        }
        
    }

    echo "<h3> ¿A cual crew forma parte el alan?</h3>";
    echo "<h5>10. Repuesta seleccionada ".$pregunta10." ---- Correcta = La masturbanda</h5>";
    if($pregunta10 == "lagod"){
        $aciertos++;
        echo "<img src='img\correcta.png' width='50px'><hr>";
    } else {
        echo "<img src='img\incorrecta.png' width='50px'><hr>";
    }


    
    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>