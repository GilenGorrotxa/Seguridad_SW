<?php 

$assessmentItems = simplexml_load_file('preguntas.xml');

$total_assessmentItems= count($assessmentItems->assessmentItem);
sleep(2);
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