<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
<body>

			<?php
			$link = mysqli_connect("localhost", "root", "Zazpi007", "quiz");
			$query = mysqli_query($link, "SELECT * from preguntas" );
			 ?>
			 
			 <h6 id="tit">Seleccione la pregunta que desea modificar:</h6>
			 <select id="preguntas" name="preguntas" >
			 <option value="">Seleccione una:</option>
			  <?php
			 while($lista=mysqli_fetch_assoc($query)){
			   echo "<option  value='".$lista['pregunta']."'>".$lista['pregunta']."</option>"; 
			   echo $lista['email'];
				}
			  ?>
			</select>



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			
			$( "#preguntas" ).change(function(){
       
         
		        $.ajax({
		               
		               
		                beforeSend: function() {
		                        $("#sucess").html(('<div><img width=70 src="imagenes/loadinfo.net.gif"/></div>'));
		                       
		                },
		                
		                success:  function (response) {
		                        $("#sucess").html('<?php include "funciones.php"; EliminarPre();?>');
		                }
		        });
		        
			});

		</script>

</body>
</html>