<?php 

require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

$servicio= new soap_server();
$ns="http://localhost/nusoap-0.9.5/samples";
$servicio->configureWSDL('ValidarContraseña',$ns);
$servicio->wsdl->schemaTargetNamespace=$ns;

$servicio->register('validar',
array('contraseña'=>'xsd:string'),
array('return'=>'xsd:string'),
$ns);

function ValidarContraseña ($contraseña){



}


 ?>
