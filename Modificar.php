	<?php 
	include 'funciones.php';
	sleep(2);

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
	<form id='form' method='post' onsubmit='mod()'>

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

	<input type='text' name='numpre' value=".$numpre." id='numpre'/>


	</form>
	<button id='btn' on>Modificar Pregunta</button>

	";


	function mod(){

			$pre= $_POST['pregunta'];
			$preco= $_POST['correcta'];
			$prein= $_POST['incorrecta'];
			$prein2= $_POST['incorrecta2'];
			$prein3= $_POST['incorrecta3'];
			$mail= $_POST['email'];
			$com= $_POST['complejidad'];
			$tema=$_POST['tema'];
			$numpre=$_POST['numpre'];

			

			$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");


			if($pre!=""){
			$sql="UPDATE preguntas SET  pregunta = '$pre' where numpregunta = '$numpre' ";
			 	 if (!mysqli_query($link ,$sql))
					 	{
							die('Error: ' . mysqli_error($link));
					 	}
				
			}
				if ($preco!="") {
					$sql1="UPDATE preguntas SET  correcta = '$preco' where numpregunta = '$numpre' ";
				 	 if (!mysqli_query($link ,$sql1))
						 	{
								die('Error: ' . mysqli_error($link));
						 	}
				}
				if ($prein!="") {
					$sql2="UPDATE preguntas SET  inco1 = '$prein' where numpregunta = '$numpre' ";
				 	 if (!mysqli_query($link ,$sql2))
						 	{
								die('Error: ' . mysqli_error($link));
						 	}
				}if ($prein2!="") {
					$sql3="UPDATE preguntas SET  inco2 = '$prein2' where numpregunta = '$numpre' ";
				 	 if (!mysqli_query($link ,$sql3))
						 	{
								die('Error: ' . mysqli_error($link));
						 	}
				}if ($prein3!="") {
					$sql4="UPDATE preguntas SET  inco3 = '$prein3' where numpregunta = '$numpre' ";
				 	 if (!mysqli_query($link ,$sql4))
						 	{
								die('Error: ' . mysqli_error($link));
						 	}
				}if ($mail!="") {
					$sql5="UPDATE preguntas SET  email = '$mail' where numpregunta = '$numpre' ";
				 	 if (!mysqli_query($link ,$sql5))
						 	{
								die('Error: ' . mysqli_error($link));
						 	}
				}if ($com!="") {
					$sql6="UPDATE preguntas SET  complejidad = '$com' where numpregunta = '$numpre' ";
				 	 if (!mysqli_query($link ,$sql6))
						 	{
								die('Error: ' . mysqli_error($link));
						 	}
				}if ($tema!="") {
					$sql7="UPDATE preguntas SET  tema = '$tema' where numpregunta = '$numpre' ";
				 	 if (!mysqli_query($link ,$sql7))
						 	{
								die('Error: ' . mysqli_error($link));
						 	}
				}
					
				mysqli_close($link);
			}
