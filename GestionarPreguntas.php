
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
			width: 170px;
			margin-bottom: -12px;
			margin-top: 10px;
		}
		#ini{
			width: 120px;
			margin-bottom: 10px;
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
		#et1{
			color :white;
	        font: oblique bold 100% cursive;
		}
		#et2{
			color :white;
	        font: oblique bold 100% cursive;
			margin-left:  -22px;
		}
		#et3{
			color :white;
	        font: oblique bold 100% cursive;
			margin-left:  -105px;
		}
		#et4{
			color :white;
	        font: oblique bold 100% cursive;
			margin-left:  -150px;
		}
		#et5{
			color :white;
	        font: oblique bold 100% cursive;
			margin-left: -95px;
		}
		#et6{
			color :white;
	        font: oblique bold 100% cursive;
			margin-left: 0px;
		}
		#et7{
			color :white;
	        font: oblique bold 100% cursive;
			margin-left: 125px;
		}
		#mail{
			margin-bottom: 10px;
			border-radius: 10px;
			margin-left: 5px;
		}
		#com{
			margin-bottom: 10px;
			border-radius: 10px;
			margin-left: 5px;
		}
		#img{
			margin-bottom: 10px;
			border-radius: 10px;
			margin-left: 5px;
		}
		#tema{
			margin-bottom: 10px;
			border-radius: 10px;
			margin-left: 5px;
		}
		#pre{
			width: 300px;
			border-radius: 10px;
			margin-bottom: 10px;
			margin-left: 5px;
		}
		#preco{
			width: 300px;
			border-radius: 10px;
			margin-bottom: 10px;
			margin-left: 5px;
		}
		#prein{
			width: 300px;
			border-radius: 10px;
			margin-bottom: 10px;
			margin-left: 5px;
		}
		#prein2{
			width: 300px;
			border-radius: 10px;
			margin-bottom: 10px;
			margin-left: 5px;
		}
		#prein3{
			width: 300px;
			border-radius: 10px;
			margin-bottom: 10px;
			margin-left: 5px;
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

			  <span id="sucess"></span>
			   <span id="usersonline"></span>

				<header class='main' id='h1'>
					
			      		
			      		
						<a href="layout.php" title="Inicio">

								<img   id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>
	                    </a>

						
					<h3 id="titulo">Gestionar preguntas: Insertar o visualizar preguntas</h3>
			    </header>


				<nav class='main' id='n1' role='navigation'>

				<img id="ini" onclick="insertarPreguntas()" src="imagenes/InsertarPreguntas.png"  onmouseover="this.src='imagenes/InsertarPreguntaspul.png';" onmouseout="this.src='imagenes/InsertarPreguntas.png';"/>


				<img id="ini" onclick="verPreguntas()" src="imagenes/Verpreguntas.png" onmouseover="this.src='imagenes/Verpreguntaspul.png';" onmouseout="this.src='imagenes/Verpreguntas.png';"/>

				</nav>
				 <span id="resultado"></span>
				 

			    <section class="main" id="s1">
			    
				<div >
					
				</div>
			    </section>
				<footer class='main' id='f1'>
					
				</footer>
			</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	 
	<script>
	function insertarPreguntas(){
	       
	        $.ajax({
	               
	                url:   'Visualizarformscript.php',
	               
	                beforeSend: function() {
	                        $("#resultado").delay(2000).html(('<div><img width=70 src="imagenes/loadinfo.net.gif"/></div>'));

	                       
	                },
	                
	                success:  function (response) {
	                        $("#resultado").html(response);
	                }
	        });
	}
	function verPreguntas(){
	       
	        $.ajax({
	               
	                url:   'visualizartabla.php',
	               
	                beforeSend: function() {
	                        $("#resultado").html(('<div><img width=70 src="imagenes/loadinfo.net.gif"/></div>'));
	                       
	                },
	                
	                success:  function (response) {
	                        $("#resultado").html(response);
	                }
	        });
	}

	function Numpre(){
	       
	         
			        $.ajax({
			               
			               
			                beforeSend: function() {
			                        $("#sucess").html(('<div><img width=70 src="imagenes/loadinfo.net.gif"/></div>'));
			                       
			                },
			                
			                success:  function (response) {
			                        $("#sucess").html('<?php include "funciones.php"; Numpreguntas();?>');
			                }
			        });
			        
	}

	</script>
	<script>
	setInterval(function(){ Numpre(); }, 20000);
	</script>

	</body>
		<?php  
	
	if ($_SESSION["autentificado"] != "SI") {
	 
	 header("Location: NoAutentificado.html");
	  exit();

	 
	}
	?>
	</html>