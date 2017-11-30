<?php  
session_start();

if ($_SESSION["autentificado"] != "SI") {
 //si no existe, envio a la página de autentificación
 header("Location: NoAutentificado.html");
 //además salgo de este script
  exit();

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
		width: 160px;
		margin-bottom: -12px;
		margin-top: 10px;
	}
	
	a{
		color:black;
	}

	#preguntas{
		width: 180px;
		margin-bottom: 20px;
		border-radius: 20px;
		
	}#tit{
		color :white;
        font: oblique bold 100% cursive;
		text-align: center;
		margin-bottom: 10px;
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
	#btn{
		margin-bottom: 20px;
		margin-top: 10px;
		border-radius: 10px;
		width: 150px;
		background-color: black;
		color: white;
	}#numpre{
		visibility: hidden;
		position: absolute;
	}
	#comenzar{
		
		margin-top: 20px;
		margin-left: -100px;
		position: absolute;
	}
   
	</style>
  </head>



  <body style="background-color:#8FC9D4  ;">
  
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>
			
				
		      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		      		<a href="layoutprofe.php" title="Inicio">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a>
				<h3 id="titulo">Revisar Preguntas: Escoge y modifica la pregunta que desees.</h3>
		    </header>


		    
		    <img id="comenzar" onclick="com()" src="imagenes/modpre.png" width="200" onmouseover="this.src='imagenes/modprepul.png';" onmouseout="this.src='imagenes/modpre.png';"/>
			
				<span id='sucess'></span>
			
          
          
         
      

			
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			
			function com(){
				 $("#comenzar").css('visibility', 'hidden');
				$.ajax({
		               
		                url:   'select.php',
		                beforeSend: function() {
		                        $("#sucess").html(('<div><img width=70 src="imagenes/loadinfo.net.gif"/></div>'));
		                       
		                },
		                
		                success:  function (response) {
		                        $("#sucess").html(response);
		                }
		        });


			}




		</script>

</body>
</html>