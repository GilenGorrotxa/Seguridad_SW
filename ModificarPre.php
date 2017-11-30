<?php 
include 'funciones.php';


$pregunta=$_POST['pregunta'];
$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
$query = mysqli_query($link, "SELECT * from preguntas where pregunta= '".$pregunta."'" );
$row=mysqli_fetch_array( $query);
$preco=$row['correcta'];
$prein=$row['inco1'];
$prein2=$row['inco2'];
$prein3=$row['inco3'];
$mail=$row['email'];
$com=$row['complejidad'];
$tema=$row['tema'];
$numpre=$row['numpregunta'];

echo "
<form id='form' method='post'>

<hr id='linea'>
<div id='preguntadiv'> <label id='et2'>Pregunta*:</label>
<input type='text' name='pregunta' id='pre'   placeholder=' ".$pregunta."' ></div>

<div id='correctadiv'><label id='et3'>Respuesta correcta*:</label>
<input type='text' name='correcta' id='preco'  placeholder=' ".$preco."'/></div>

<div id='incodiv'><label id='et4'>Respuesta incorrecta nº1*:</label>
<input type='text' name='incorrecta' id='prein'  placeholder=' ".$prein."'/></div>

<div id='inco2div'><label id='et4'>Respuesta incorrecta nº2*:</label>
<input type='text' name='incorrecta2' id='prein2'  placeholder=' ".$prein2."'/></div>

<div id='inco3div'> <label id='et4'>Respuesta incorrecta nº3*:</label>
<input type='text' name='incorrecta3' id='prein3'  placeholder=' ".$prein3."'/></div>

<hr id='linea'>

<div id='emaildiv'><label id='et1'>Email*:</label>
<input type='text' name='email' id='mail'   placeholder=' ".$mail."'/></div>

<div id='comdiv'><label id='et5'>Complejidad(1..5)*:</label>
<input type='text' name='complejidad' id='com'   placeholder=' ".$com."'/></div>

<div id='temadiv'><label id='et6'>Tema*:</label>
<input type='text' name='tema' id='tema'   placeholder=' ".$tema."'/></div>

<input type='text' name='numpre' visibility='hidden' value=".$numpre." id='numpre'/>


</form>
<button id='btn' on>Modificar Pregunta</button>

";





 ?>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#btn").click(function(){
var vname = $("#tema").val();
var vemail = $("#mail").val();
var pregunta= $('#pre').val();
var correcta= $('#preco').val();
var incorrecta= $('#prein').val();
var incorrecta2= $('#prein2').val();
var incorrecta3= $('#prein3').val();
var complejidad= $('#com').val();
var numpre= $('#numpre').val();

/*if(pregunta=='' ){alert('Rellene el campo Pregunta.')}
else if(correcta==''){alert('Rellene el campo de la respuesta correcta.')}
else if(incorrecta==''){alert('Rellene el campo de la respuesta incorrecta.')}
else if(incorrecta2==''){alert('Rellene el campo de la respuesta incorrecta2.')}
else if(incorrecta3==''){alert('Rellene el campo de la respuesta incorrecta3.')}
else if(vemail==''){alert('Rellene el campo del email.')}
else if(complejidad=='' || complejidad>5){alert('El campo complejidad esta vacio o es incorrecto.')}
else if(vname==''){alert('Rellene el campo del tema.')}
else{*/
$.post("ModPre.php", 
{ 
name:vname,
email:vemail,
correcta:correcta,
incorrecta:incorrecta,
incorrecta2:incorrecta2,
incorrecta3:incorrecta3,
complejidad:complejidad,
pregunta:pregunta,
numpre:numpre
},
function(response,status){ 
alert("su pregunta ha sido modificada.");

});

});
});
</script>
