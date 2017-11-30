<?php 

require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

$servicio= new soap_server();
$ns="http://localhost/nusoap-0.9.5/samples";
$servicio->configureWSDL('ValidarContrasena',$ns);
$servicio->wsdl->schemaTargetNamespace=$ns;

$servicio->register('validar',
array('contrasena'=>'xsd:string'),
array('return'=>'xsd:string'),
$ns);

function validar ($contrasena){

	$lineas = file("toppasswords.txt");
	$respuesta="";   
    // Podemos mostrar / trabajar con todas las líneas:
  foreach($lineas as $linea){
        
	if (strstr($linea,$contrasena)){
	           	$respuesta="INVALIDA";
	            return $respuesta;
	            break;
	            }
	      
}
if (empty($respuesta)) {
	$respuesta="VALIDA";
	return $respuesta;
}

}
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servicio->service($HTTP_RAW_POST_DATA);

 ?>
