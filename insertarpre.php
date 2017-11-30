<?php 
include "funciones.php";
$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");

							 $sql="INSERT INTO preguntas(pregunta, correcta, inco1, inco2, inco3, email, complejidad, tema) VALUES ('$_POST[pre]','$_POST[preco]','$_POST[prein]', '$_POST[prein2]', '$_POST[prein3]','$_POST[mail]', '$_POST[com]','$_POST[tema]')";


									 if (!mysqli_query($link ,$sql))
									 	{
											die('Error: ' . mysqli_error($link));
									 	}
								$mail=$_POST[mail];
								mysqli_close($link);
								insertarXML();
								?>
								<script>
									alert("Su pregunta ha sido creada con éxito.");
								</script>
								<?php


					


 ?>