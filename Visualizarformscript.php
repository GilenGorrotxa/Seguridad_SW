  <?php 
  include 'funciones.php';
  sleep(2);

  echo "
  <form id='form' method='post'>


  <div id='preguntadiv'> <label id='et2'>Pregunta*:</label>
  <input type='text' name='pregunta' id='pre' placeholder='pregunta'/></div>

  <div id='correctadiv'><label id='et3'>Respuesta correcta*:</label>
  <input type='text' name='correcta' id='preco' placeholder='correcta'/></div>

  <div id='incodiv'><label id='et4'>Respuesta incorrecta nº1*:</label>
  <input type='text' name='incorrecta' id='prein' placeholder='incorrecta'/></div>

  <div id='inco2div'><label id='et4'>Respuesta incorrecta nº2*:</label>
  <input type='text' name='incorrecta2' id='prein2' placeholder='incorrecta2'/></div>

  <div id='inco3div'> <label id='et4'>Respuesta incorrecta nº3*:</label>
  <input type='text' name='incorrecta3' id='prein3' placeholder='incorrecta3'/></div>

  <hr id='linea'>

  <div id='emaildiv'><label id='et1'>Email*:</label>
  <input type='text' name='email' id='mail' placeholder='Email'/></div>

  <div id='comdiv'><label id='et5'>Complejidad(1..5)*:</label>
  <input type='text' name='complejidad' id='com' placeholder='complejidad'/></div>

  <div id='temadiv'><label id='et6'>Tema*:</label>
  <input type='text' name='tema' id='tema' placeholder='tema'/></div>

  </form>
  <button id='btn'>Enviar Pregunta</button>

  ";

   ?>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
  $("#btn").click(function(){
  var vname = $("#tema").val();
  var vemail = $("#mail").val();
  var pregunta= $('#pre').val();
  var correcta= $('#preco').val();
  var incorrecta= $('#prein').val();
  var incorrecta2= $('#prein2').val();
  var incorrecta3= $('#prein3').val();
  var complejidad= $('#com').val();

  if(pregunta=='' ){alert('Rellene el campo Pregunta.')}
  else if(correcta==''){alert('Rellene el campo de la respuesta correcta.')}
  else if(incorrecta==''){alert('Rellene el campo de la respuesta incorrecta.')}
  else if(incorrecta2==''){alert('Rellene el campo de la respuesta incorrecta2.')}
  else if(incorrecta3==''){alert('Rellene el campo de la respuesta incorrecta3.')}
  else if(vemail==''){alert('Rellene el campo del email.')}
  else if(complejidad==''){alert('Rellene el campo de la complejidad.')}
  else if(vname==''){alert('Rellene el campo del tema.')}
  else{
  $.post("users.php", 
  { 
  name:vname,
  email:vemail,
  correcta:correcta,
  incorrecta:incorrecta,
  incorrecta2:incorrecta2,
  incorrecta3:incorrecta3,
  complejidad:complejidad,
  pregunta:pregunta
  },
  function(response,status){ 
  alert("su respuesta ha sido enviada.");
  $("#form")[0].reset();
  });
  }
  });
  });
  </script>
