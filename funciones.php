<?php 


function Login()
{

		$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");

			

			$usuarios = mysqli_query($link, "SELECT email,password from users " );
			$cont=0;

			if ($_POST["mail"]=="web000@ehu.es" && $_POST["pass"]=="web000"){ 

					session_start();
					$_SESSION["autentificado"]= "SI";
					$_SESSION['mail'] = $_POST['mail'];
					echo '<script type="text/javascript">alert("Bienvenido a Quiz Profesor.");</script>';
					header("Location: layoutprofe.php");

			}else{
				while ($row = mysqli_fetch_array( $usuarios )) 
				{
				 	$email=$row['email'];
				 	$pass=$row['password'];

				 	if($email == $_POST['mail'] &&  $pass== $_POST['pass']){
						
						session_start();
						$_SESSION["autentificado"]= "SI";
						$_SESSION['mail'] = $_POST['mail'];
						echo '<script type="text/javascript">alert("Bienvenido a Quiz.");</script>';
						header("Location: layout.php");
						/*$mail= $_POST['mail'];
					    echo "<a id=enlace href='layout.php?mail=$mail'>>>Pasar a la sigiente parte del juego<<</a>";*/
					    break;
						
				 	}
				 	$cont++;
				}
			}
			$row_cnt = mysqli_num_rows($usuarios);
	
				
			    if($row_cnt==$cont){
			        echo '<div id=error class="error">Su email o contraseña es incorrecto.</div>'; 
			        
			    }

}

 
 function registrarse(){
 	$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
							
							 

		$sql="INSERT INTO users(email, nombre, apellidos, nick, password, foto) VALUES ('$_POST[mail]','$_POST[nom]','$_POST[ape]','$_POST[nick]', '$_POST[pass]', '$_POST[img]')";

						if (!mysqli_query($link ,$sql))
							{
								die('Error: ' . mysqli_error($link));
							}

								else{
									/*?>
									<script>
										window.location.href = "Login.php";
										window.location("Login.php");
									</script>
									<?php*/
									header("Location:Login.php");
									}
								
						
						mysqli_close($link);


 }

function insertarpregunta(){

	
							
							$pre= $_POST['pre'];
							$preco= $_POST['preco'];
							$prein= $_POST['prein'];
							$prein2= $_POST['prein2'];
							$prein3= $_POST['prein3'];
							$mail= $_POST['mail'];
							$com= $_POST['com'];
							$tema=$_POST['tema'];

							if($pre== ""){
								
								echo '<div id=error class="error">Escriba una pregunta por favor.</div>';
							}
							else if($preco== ""){
								
								echo '<div id=error1 class="error">Escriba una respuesta correcta por favor.</div>';
							}
							else if($prein== ""){
								
								echo '<div id=error2 class="error">Rellene la respuesta incorrecta nº1.</div>';
							}
							else if($prein2== ""){
								echo '<div id=error3 class="error">Rellene la respuesta incorrecta nº2.</div>';
							}
							else if($prein3== ""){
								echo '<div id=error4 class="error">Rellene la respuesta incorrecta nº3.</div>';
							}
							/////////////////////////////////////////////////////////////////////////////////////////////////////

							else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){

								echo '<div id=error5 class="error">El email introducido está vacio o es incorrecto.</div>';
							}
							else if($com== "" || $com>5){
								echo '<div id=error6 class="error">La complejidad introducida supera el limite.</div>';
							}
							////////////////////////////////////////////////////////////////////////////////////////////////////
							else if($tema== ""){
								echo '<div id=error7 class="error">Escriba un tema por favor.</div>';
							}
							else{
							
							$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
							copy($_FILES['img']['tmp_name'],$_FILES['img']['name']);
						  	$nom=$_FILES['img']['name'];

							 $sql="INSERT INTO preguntas(pregunta, correcta, inco1, inco2, inco3, email, complejidad, tema, foto) VALUES ('$_POST[pre]','$_POST[preco]','$_POST[prein]', '$_POST[prein2]', '$_POST[prein3]','$_POST[mail]', '$_POST[com]','$_POST[tema]','<img  width=100px src=\"$nom\">')";


									 if (!mysqli_query($link ,$sql))
									 	{
											die('Error: ' . mysqli_error($link));
									 	}
						
								mysqli_close($link);
								insertarXML();
								header("Location: Preguntas.php");
							}
								
}
function Bienvenido(){
	
	
	$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
	
	$mail=$_SESSION['mail'];
	//$mail=$_GET["mail"];
	$query = mysqli_query($link, "SELECT * from users where email= '".$mail."'" );
	$row=mysqli_fetch_array( $query);
	$nombre=$row['nombre'];
	$apellido=$row['apellidos'];
	$foto=$row['foto'];
	echo "<div id=loggeduser>";
	if($foto==""){
		$foto="usersinfoto.png";
		echo "<img  width=50px src=imagenes/".$foto.">";
		echo "<br>";
	}else{
		echo "<img  width=50px src=imagenes/".$foto.">";
		echo "<br>";
	}
	echo $nombre;
	echo " ";
	echo $apellido;
	

}
function Numpreguntas(){
	session_start();
	$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
	$mail=$_SESSION["mail"];
	//$mail=$_GET["mail"];
	$query = mysqli_query($link, "SELECT * from users where email= '".$mail."'" );
	$row=mysqli_fetch_array( $query);
	$nombre=$row['nombre'];
	$apellido=$row['apellidos'];
	$foto=$row['foto'];
	echo "<div id=loggeduser>";
	if($foto==""){
		$foto="usersinfoto.png";
		echo "<img  width=50px src=imagenes/".$foto.">";
		echo "<br>";
	}else{
		echo "<img  width=50px src=imagenes/".$foto.">";
		echo "<br>";
	}
	$query = mysqli_query($link, "SELECT count(*) from preguntas where email= '".$mail."'" );
	$row=mysqli_fetch_array( $query);
	$numpreguntas=$row[0];
	$query = mysqli_query($link, "SELECT count(*) from preguntas");
	$row2=mysqli_fetch_array( $query);
	$totalpreguntas=$row2[0];

	echo $nombre;
	echo " ";
	echo $apellido;
	echo "<br>";
	echo "Nº de preguntas: ";
	echo $numpreguntas;
	echo "/".$totalpreguntas."";
	echo "</div>";


}
function insertarXML(){

							$pre= $_POST['pre'];
							$preco= $_POST['preco'];
							$prein= $_POST['prein'];
							$prein2= $_POST['prein2'];
							$prein3= $_POST['prein3'];
							$mail= $_POST['mail'];
							$com= $_POST['com'];
							$tema=$_POST['tema'];


    
	$library = new SimpleXMLElement('preguntas.xml', null, true);
	$assessmentItem = $library->addChild('assessmentItem');
	// Le asignamos los atributos complejidad, tema y mail
	$assessmentItem->addAttribute('complexity', $com);
	$assessmentItem->addAttribute('subject', $tema);
	$assessmentItem->addAttribute('author', $mail);

	// Creamos los elementos que van dentro de <book>: <title>, <author> y <publisher>
	//$assessmentItem->addChild('itemBody', $pre);
	//$assessmentItem->addChild('correctResponse', $preco);
	$itemBody= $assessmentItem->addChild('itemBody');
	$itemBody->addChild('p',$pre);
	$correctResponse = $assessmentItem->addChild('correctResponse');
	$correctResponse->addChild('value',$preco);
	$incorrectResponses = $assessmentItem->addChild('incorrectResponses');
	$incorrectResponses->addChild('value1',$prein);
	$incorrectResponses->addChild('value2',$prein2);
	$incorrectResponses->addChild('value3',$prein3);

	
	$library->asXML('preguntas.xml');
	

	
}
function insertarpre(){


							$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");

							 $sql="INSERT INTO preguntas(pregunta, correcta, inco1, inco2, inco3, email, complejidad, tema) VALUES ('$_POST[pre]','$_POST[preco]','$_POST[prein]', '$_POST[prein2]', '$_POST[prein3]','$_POST[mail]', '$_POST[com]','$_POST[tema]')";


									 if (!mysqli_query($link ,$sql))
									 	{
											die('Error: ' . mysqli_error($link));
									 	}
						
								mysqli_close($link);
								insertarXML();
								?>
								<script>
									alert("Su pregunta ha sido creada con éxito.");
								</script>
								<?php

}



 ?>