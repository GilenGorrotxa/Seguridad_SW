<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
	<style>
	#page-wrap{
		text-align: center;
		background-color: ;
	}
	#titulo{
		background:#D5E4E8 none repeat scroll 0 0;
    border:3px solid #B5CAD0;
    margin:10px 0px;
    padding:10px;
	}
	#logo{
		width: 160px;
		margin-bottom: -12px;
		margin-top: 10px;
	}
	#tabla{

		color: white;
		border-color: white;
		width: 900px;
		margin: 0px auto 10px;
	}
	
	td{
		padding: 10px;
		font-weight: bold;
		border:2px solid white;
	}
	th{
		padding: 10px;
		font: oblique bold 100% cursive;
		border:2px solid white;
		
	}

	table{
		border: 2px solid white;
		padding: 10px;
		text-align: center;
		
	}

	
	
	</style>
  </head>



  <body style="background-color:#8FC9D4  ;">
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>
			
				
		      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		      		<a href="layout.php" title="Inicio">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a>
				<h3 id="titulo">Quiz: el juego de las preguntas</h3>
		    </header>






<?php

$assessmentItems = simplexml_load_file('preguntas.xml');

$total_assessmentItems= count($assessmentItems->assessmentItem);

echo "<table id=tabla >";
echo "<tr><th>PREGUNTA</th><th>RESPUESTA CORRECTA</th><th>RESPUESTAS INCORRECTAS</th><th>COMPLEJIDAD</th><th>TEMA</th><th>AUTOR</th></tr>";

for($x=0; $x<$total_assessmentItems;$x++)
	{

		echo"<tr>";
		//<td>".$assessmentItems->assessmentItem[$x]->itemBody."</td>";
		//echo"<td>'".$assessmentItems->assessmentItem[$x]->correctResponse."'</td>'";

		foreach ($assessmentItems->assessmentItem[$x]->itemBody as $itemBody) 
			{

				echo"<td>'".$itemBody->p."'</td>";
			}
		
		foreach ($assessmentItems->assessmentItem[$x]->correctResponse as $correctResponse) 
			{

				echo"<td>'".$correctResponse->value."'</td>";
			}


		foreach ($assessmentItems->assessmentItem[$x]->incorrectResponses as $incorrectResponses) 
			{

				echo"<td>".$incorrectResponses->value1."'<br>'".$incorrectResponses->value2."'<br>'".$incorrectResponses->value3."'</td>";
			}

		echo"<td>".$assessmentItems->assessmentItem[$x]->attributes()->complexity."</td>";
		echo"<td>".$assessmentItems->assessmentItem[$x]->attributes()->subject."</td>";
		echo "<td>".$assessmentItems->assessmentItem[$x]->attributes()->author."'</td>";	
		echo "</tr>";
	}
echo "</table>";

?>
<footer class='main' id='f1'>
				
			</footer>
		</div>


</body>
</html>