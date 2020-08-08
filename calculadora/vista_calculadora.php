<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
	<a href="../index.html">INDEX</a>
</head>
<body>

	<section>

	<h1>Calculadora</h1>
	<form name="calculadora" action="controlador_calculadora.php" method="GET" enctype="multipart/form-data">

	
		Número 1:<input type="text" name="n1"  /><br>
		<br>
		<select name="op">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<br>
		<br>Nú
		mero 2:<input type="text" name="n2" />

	
	<br><input type="submit" name="calcular" value="calcular" id="calcular">
	</form>
	<?php
if(isset($_GET['calcular']))
{
	echo '<h1> El resultado de la operación es: ' . $calcular.'<h1>';
}
?>

	
	
	</section>


	

</body>
</html>
</body>
</html>