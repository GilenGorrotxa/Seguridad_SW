<?php
 
    require_once('lib/nusoap.php');
     
    $cliente = new nusoap_client('http://ehusw.es/jav/ServiciosWeb/comprobarmatricula.php');
    //print_r($cliente);
    $mail= $_POST['mail'];
    $datos_persona_entrada = array( "x" => $mail) ;
 
    $resultado = $cliente->call('comprobar',$datos_persona_entrada);
     
    print_r($resultado);
     
?>

