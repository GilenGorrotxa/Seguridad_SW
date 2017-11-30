

<?php 
include 'funciones.php';
sleep(2);
/*echo "<form id='form' enctype='multipart/form-data' method='post'>

			<div id='ok'></div>
          
           <label id='et2'>Pregunta*:</label><input id='pre' type='text' name='pre'><br>
           <label id='et3'>Respuesta correcta*:</label><input id='preco' type='text' name='preco' ><br>
           <label id='et4'>Respuesta incorrecta nº1*:</label><input id='prein' type='text' name='prein'><br>
           <label id='et4'>Respuesta incorrecta nº2*:</label><input id='prein2' type='text' name='prein2'><br>
           <label id='et4'>Respuesta incorrecta nº3*:</label><input id='prein3' type='text' name='prein3'><br>
			 
			 <hr id='linea'>

			
           
            
                <input type='submit' id='button'  value='Enviar Pregunta'>
         
       </form>
";*/


echo "
<form  method='POST'>
  
    <label id='et2'>Pregunta*:</label>
    <input data-validation='length' data-validation-length='min1' id=pre name=pre><br>
 
   <label id='et3'>Respuesta correcta*:</label>
    <input data-validation='length' data-validation-length='min1' id=preco name=preco><br>

    <label id='et4'>Respuesta incorrecta nº1*:</label>
    <input data-validation='length' data-validation-length='min1' id=prein name=prein><br>

    <label id='et4'>Respuesta incorrecta nº2*:</label>
    <input data-validation='length' data-validation-length='min1' id=prein2 name=prein2><br>
 
  
   <label id='et4'>Respuesta incorrecta nº3*:</label>
    <input data-validation='length' data-validation-length='min1' id=prein3 name=prein3><br>
  


<hr id='linea'>


	
    <label id='et1'>Email*:</label>
    <input data-validation='email' data-validation-length='min1' id=mail name=mail><br>

    <label id='et5'>Complejidad(1..5)*:</label>
    <input data-validation='number'  id=com data-validation-length='min1' name=com><br>
  	
    <label id='et6'>Tema*:</label>
    <input data-validation='length' data-validation-length='min1' id=tema name=tema><br>
  	
    <input type='button' value='Enviar Pregunta' onclick='insertarpre()' id=button>
  	
  
</form>


<script src='//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js'></script>
<script>
  $.validate({
    lang: 'es'
  });
</script>





";





 ?>