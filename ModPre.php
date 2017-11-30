
		<?php
		include "funciones.php";

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
										
		?>