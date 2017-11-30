




<form id='form' method='post'>
			<?php
			$link = mysqli_connect('localhost', 'root', 'Zazpi007', 'quiz');
			$query = mysqli_query($link, 'SELECT * from preguntas' );
			 ?>
			 
			 <h6 id='tit'>Seleccione la pregunta que desea modificar:</h6>
			 <select id='preguntas' name='preguntas' >
			 <option value=''>Seleccione una:</option>
			  <?php
			 while($lista=mysqli_fetch_assoc($query)){
			 	$pregunta=$lista['pregunta'];
			 	//echo"<script>alert('$pregunta');</script>";
			
			   echo"<option value='$pregunta'>$pregunta</option>";
				}
			  ?>
			</select>
			<span id='resultado'></span>
</form>



 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			
			$( "#preguntas" ).change(function() 
				{
					
			       var pregunta = $("#preguntas").val();
			       
			       $.post("ModificarPre.php", 
						{ 
							pregunta:pregunta,
						},
						
						function(response,status){ 
							
							$("#resultado").html(response);
						});
				});


		</script>