

<?php
include "funciones.php";
if (isset($_POST['mail'])) {
    if (registrarse()) {
        header('location:Login.php');
        }
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
	#logo{
		width: 200px;
		margin-top: 80px;
		
	}
	#ini{
		width: 110px;
		margin-bottom: 40px;
	}

	a{
		color:black;
		font-size: 15px;
	}
	
	#titulo{
		background:#D5E4E8 none repeat scroll 0 0;
    	border:3px solid #B5CAD0;
   		margin:10px 0px;
    	padding:10px;
    	margin-bottom: 20px;
	}
	#boton{
		margin-top: 15px;
		margin-bottom: 20px;
		font-size: 12px;
		width: 100px;
		padding: 5px;
		border-radius: 10px;
	}
	#creditos{
		margin-right: 20px;
	}
	#et{
		color: white;
		font-size: 20px;
	}
	#flecha{
		font-size: 10px;
	}
	#et2{
		color :white;
        font: oblique bold 100% cursive;
		
	}
	#et3{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: -20px;
		
	}
	#et4{
		color :white;
        font: oblique bold 100% cursive;
		margin-left: -25px;
	}
	#et5{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: -45px;
		
	}
	#et6{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: -117px;

		
	}
	#et7{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: -70px;
		
	}
	#et8{
		color :white;
        font: oblique bold 100% cursive;
        margin-left: 10px;
		
	}
	#mail{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#nom{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#ape{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#nick{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#pass{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#pass2{
		width: 300px;
		border-radius: 10px;
		margin-left: 5px;
		margin-bottom: 15px;
	}
	#img{
		margin-bottom: 25px;
	}
	#button{
		margin-bottom: 20px;
		margin-top: 10px;
		border-radius: 10px;
		width: 150px;
		background-color: black;
		color: white;
	}
	#resultado{
		color:white;
		font: oblique bold 100% cursive;
		position: absolute;
		margin-left: 10px;
	}
	#success{
		color:white;
		font: oblique bold 100% cursive;
		position: absolute;
		margin-left: 10px;
	}
	
	</style>

  </head>



  <body style="background-color:#757676  ;">
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>

		      		<a href="index.html" title="Inicio">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a><br>
					
					<h3 id="titulo">Registrarse: Introduce tus datos.</h3>
		    </header>
			
				
			<form id="form" method="post" >

				   <label id="et2">Email*:</label><input id="mail" type="text" name="mail"><span id="resultado"></span><br>
		           <label id="et3">Nombre*:</label><input id="nom" type="text" name="nom"><br>
		           <label id="et4">Apellidos*:</label><input id="ape" type="text" name="ape"><br>
		           <label id="et8">Nick*:</label><input id="nick" type="text" name="nick"><br>
		           <label id="et5">Contraseña*:</label><input id="pass" type="password" name="pass"><span id="success"></span><br>
		           <label id="et6">Repita la contraseña*:</label><input id="pass2" type="password" name="pass2"><br>
		           <label id="et7">Foto de perfil:</label> <input type="file" id="img" name="img"/><br>
			 
				   <input type="submit" id="button" value="Registrarse">

			</form>

		    </section>
			<footer class='main' id='f1'>
				
				
				
			</footer>
		</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>
	$( "#mail" ).change(function() 
	{
       var mail = $("#mail").val();
       $.post("Vip.php", 
			{ 
				mail:mail,
			},
			
			function(response,status){ 
				$("#resultado").html(response);
				
				if($.trim(response) === 'NO'){
					$('#button').attr("disabled", true);
				}else{
					$('#button').attr("disabled", false);
				}
			});
	});

$( "#pass" ).change(function() 
	{
       var pass = $("#pass").val();
       $.post("ValPassword.php", 
			{ 
				pass:pass,
			},
			
			function(response,status){ 
				
				$("#success").html(response);

				if($.trim(response) === 'INVALIDA'){
					$('#button').attr("disabled", true);
				}else{
					$('#button').attr("disabled", false);
				}
			});
	});



</script>
<script>

	$("#form").submit(function () {  
    		if($("#mail").val().length < 1) {  
        		alert("Escriba un email por favor.");  
        		return false;  
   			 }  
   			 if($("#nom").val().length < 1) {  
        		alert("Escriba un nombre por favor.");  
        		return false;  
   			 } 
   			  if($("#ape").val().length < 1) {  
        		alert("Escriba sus apellidos por favor.");  
        		return false;  
   			 } 
   			 if($("#nick").val().length < 1) {  
        		alert("Escriba su nick por favor.");  
        		return false;  
   			 } 
   			  if($("#pass").val().length < 1) {  
        		alert("Escriba su contraseña por favor.");  
        		return false;  
   			 } 
   			 if($("#prein3").val().length < 1) {  
        		alert("Repita la contraseña escrita en el apartado anterior.");  
        		return false;  
   			 } 

});



</script>


</body>

</html>