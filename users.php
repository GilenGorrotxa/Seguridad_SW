

	<?php



	include "funciones.php";
	$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");

		 $sql="INSERT INTO preguntas(pregunta, correcta, inco1, inco2, inco3, email, complejidad, tema) VALUES ('$_POST[pregunta]','$_POST[correcta]','$_POST[incorrecta]', '$_POST[incorrecta2]', '$_POST[incorrecta3]','$_POST[email]', '$_POST[complejidad]','$_POST[name]')";


				 if (!mysqli_query($link ,$sql))
				 	{
						die('Error: ' . mysqli_error($link));
				 	}
			mysqli_close($link);
		$pre= $_POST['pregunta'];
		$preco= $_POST['correcta'];
		$prein= $_POST['incorrecta'];
		$prein2= $_POST['incorrecta2'];
		$prein3= $_POST['incorrecta3'];
		$mail= $_POST['email'];
		$com= $_POST['complejidad'];
		$tema=$_POST['tema'];


	    
		$library = new SimpleXMLElement('preguntas.xml', null, true);
		$assessmentItem = $library->addChild('assessmentItem');
		// Le asignamos los atributos complejidad, tema y mail
		$assessmentItem->addAttribute('complexity', $com);
		$assessmentItem->addAttribute('subject', $tema);
		$assessmentItem->addAttribute('author', $mail);
		$itemBody= $assessmentItem->addChild('itemBody');
		$itemBody->addChild('p',$pre);
		$correctResponse = $assessmentItem->addChild('correctResponse');
		$correctResponse->addChild('value',$preco);
		$incorrectResponses = $assessmentItem->addChild('incorrectResponses');
		$incorrectResponses->addChild('value1',$prein);
		$incorrectResponses->addChild('value2',$prein2);
		$incorrectResponses->addChild('value3',$prein3);

		
		$library->asXML('preguntas.xml');
									
	?>