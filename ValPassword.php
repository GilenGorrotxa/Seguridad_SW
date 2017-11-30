<?php
 
    require_once('lib/nusoap.php');
     
    $cliente = new nusoap_client('http://localhost/Lab2B_SW/comprobarContrasena.php');
    //print_r($cliente);
     $pass= $_POST['pass'];
    $datos_persona_entrada = array( "contrasena" => $pass) ;
 
    $resultado = $cliente->call('validar',$datos_persona_entrada);
     
    print_r($resultado);
     
?>
