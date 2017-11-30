<?php
session_start();
if ($_SESSION["autentificado"] != "SI") {
 //si no existe, envio a la página de autentificación
 header("Location: NoAutentificado.html");
 //además salgo de este script
 
}else{
include 'funciones.php';
Bienvenido();
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	


	<title>Preguntas</title>
    
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
		width: 300px;
		margin-bottom: -12px;
		margin-top: 30px;
	}
	#ini{
		width: 130px;
		margin-bottom: 40px;
	}

	a{
		color:black;
	}
	#logout{
		margin-top: 0px;
	}
	#loggeduser{
		text-align: center;
		margin-bottom: 0px;
	}
	
	</style>
  </head>



  <body style="background-color:#8FC9D4  ;">
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>
				
			
			<span class="right"><input type="button" id="logout" value="Logout"></span>
		      		<br>
		      		
		      		<a href="InsertarPregunta.php" title="Preguntas">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a>
				<h3 id="titulo">Quiz: el juego de las preguntas</h3>
		    </header>


			<nav class='main' id='n1' role='navigation'>
				
				
			<span><a href='InsertarPregunta.php'><img id="ini" src="imagenes/InsertarPreguntas.png" onmouseover="this.src='imagenes/InsertarPreguntaspul.png';" onmouseout="this.src='imagenes/InsertarPreguntas.png';"/></a></span>
				<?php
				/*$mail= $_GET['mail'];
					echo"<span><a href='InsertarPregunta.php?mail=$mail'><img id=ini src=imagenes/InsertarPreguntas.png onmouseover=this.src='imagenes/InsertarPreguntaspul.png'; onmouseout=this.src=imagenes/InsertarPreguntas.png;/></a></spam>";
					*/
				?>
				
				<span><a href='GestionarPreguntas.php'><img id="ini" src="imagenes/GestionarPreguntas.png" onmouseover="this.src='imagenes/GestionarPreguntaspul.png';" onmouseout="this.src='imagenes/GestionarPreguntas.png';"/></a></span>
				<?php
				/*$mail= $_GET['mail'];
					echo"<span><a href='GestionarPreguntas.php?mail=$mail'><img id=ini src=imagenes/GestionarPreguntas.png onmouseover=this.src='imagenes/GestionarPreguntaspul.png'; onmouseout=this.src=imagenes/GestionarPreguntas.png;/></a></spam>";
				*/
				?>

				<span><a href='creditos.html'><img id="ini" src="imagenes/creditos.png" onmouseover="this.src='imagenes/creditospul.png';" onmouseout="this.src='imagenes/creditos.png';"/></a></span>

				
				<span><a href='Preguntas.php'><img id=ini src=imagenes/Verpreguntas.png onmouseover="this.src='imagenes/Verpreguntaspul.png';" onmouseout="this.src='imagenes/Verpreguntas.png';"/></a></span>
				
			</nav>
		    <section class="main" id="s1">
		    
			<div >
				
			</div>
		    </section>
			<footer class='main' id='f1'>
				<a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a>
				<a href='https://github.com'>Link GITHUB</a>
			</footer>
		</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
	$("#logout").click(function() {
		
		alert("Gracias por su visita.");
		$(location).attr('href', 'Logout.php');
	});
	

</script>
</body>
</html>