<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<!-- Include JS File Here -->

<!-- Include JS File Here -->
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
if(vname=='' && vemail=='')
{
alert("Please fill out the form");
}
else if(vname=='' && vemail!==''){alert('Name field is required')}
else if(vemail=='' && vname!==''){alert('Email field is required')}
else{
$.post("users.php", //Required URL of the page on server
{ // Data Sending With Request To Server
name:vname,
email:vemail,
correcta:correcta,
incorrecta:incorrecta,
incorrecta2:incorrecta2,
incorrecta3:incorrecta3,
complejidad:complejidad,
pregunta:pregunta
},
function(response,status){ // Required Callback Function
alert("su respuesta ha sido enviada.");//"response" receives - whatever written in echo of above PHP script.
$("#form")[0].reset();
});
}
});
});
</script>
</head>
<body>
<div id="main">
<h2>jQuery Ajax $.post() Method</h2>
<hr>
<form id="form" method="post">


<div id="preguntadiv"><label>Pregunta</label>
<input type="text" name="pregunta" id="pre" placeholder="pregunta"/></div>

<div id="correctadiv"><label>Correcta</label>
<input type="text" name="correcta" id="preco" placeholder="correcta"/></div>

<div id="incodiv"><label>Incorrecta</label>
<input type="text" name="incorrecta" id="prein" placeholder="incorrecta"/></div>

<div id="inco2div"><label>Incorrecta2</label>
<input type="text" name="incorrecta2" id="prein2" placeholder="incorrecta2"/></div>

<div id="inco3div"><label>Incorrecta3</label>
<input type="text" name="incorrecta3" id="prein3" placeholder="incorrecta3"/></div>

<div id="emaildiv"><label>Email</label>
<input type="text" name="email" id="mail" placeholder="Email"/></div>

<div id="comdiv"><label>Complejidad</label>
<input type="text" name="complejidad" id="com" placeholder="complejidad"/></div>

<div id="temadiv"><label>Tema</label>
<input type="text" name="tema" id="tema" placeholder="tema"/></div>

</form>
<button id="btn">Send Data</button>
</div>
</body>
</html>