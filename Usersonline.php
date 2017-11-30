<?php 


////////////////////////////////////////////
//USUARIOS ACTIVOS
//Calcula el numero de usuarios activos
////////////////////////////////////////////

function usuarios_activos()
{
   //permitimos el uso de la variable portadora del numero ip en nuestra funcion
   global $REMOTE_ADDR;

   //asignamos un nombre memotecnico a la variable
   $ip = $REMOTE_ADDR;
   //definimos el momento actual
   $ahora = time();

   //conectamos a la base de datos
   //Usad vuestros propios parametros
   $link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
    $conn = mysql_connect("localhost","root","Zazpi007");
   mysql_select_db("quiz",$conn);

   //actualizamos la tabla
   //borrando los registros de las ip inactivas (24 minutos)
   $limite = $ahora-24*60;
   $ssql = "delete from control_ip where fecha < ".$limite;
   mysql_query($ssql);

   //miramos si el ip del visitante existe en nuestra tabla
   $ssql = "select ip, fecha from control_ip where ip = '$ip'";
   $result = mysql_query($ssql);

   //si existe actualizamos el campo fecha
   if (mysql_num_rows($result) != 0) $ssql = "update control_ip set fecha = ".$ahora." where ip = '$ip'";
   //si no existe insertamos el registro correspondiente a la nueva sesion
   else $ssql = "insert into control_ip (ip, fecha) values ('$ip', $ahora)";

   //ejecutamos la sentencia sql
   mysql_query($ssql);

   //calculamos el numero de sesiones
   $ssql = "select ip from control_ip";
   $result = mysql_query($ssql);
   $usuarios = mysql_num_rows($result);

   //liberamos memoria
   mysql_free_result($result);

   //devolvemos el resultado
   return $usuarios;
   echo $usuarios;
}
?>









 ?>