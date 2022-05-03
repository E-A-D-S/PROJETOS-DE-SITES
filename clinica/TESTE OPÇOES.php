<html>
<head>
<title>Documento sem título</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
function testando(){
var teste = document.getElementById("campo").value;
if(teste==1){document.getElementById("local").innerHTML = "<iframe width='700px height='400px' frameborder='0' src='formulario1.html'></iframe>";}
if(teste==2){document.getElementById("local").innerHTML = "<iframe width='700px height='400px' frameborder='0' src='formulario2.html'></iframe>";}
if(teste==3){document.getElementById("local").innerHTML = "<iframe width='700px height='400px' frameborder='0' src='formulario3.html'></iframe>";}
}
</script>
</head>
<body>
<form name="formulario">
<select id="campo" onchange="testando();">
<option value="1">dinheiro</option>
<option value="2">cartão</option>
<option value="2">cheque</option>
</select>
</form>

<div id="local"></div>
</form>
</body>
</html>