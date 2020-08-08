<!DOCTYPE html>
<head>	
	<title>Convetidor de grados</title>
	<a href="../index.html" >INDEX</a>
	<br>
	<br>
</head>
<body>
	<form name="conversor" type="text/multipart" method="post" action="controlador_convertir.php">
		<input type="text" name="cant" placeholder="coloca un grado"/><br/>
		<input type="radio" name="con" value="Celsius"/>Celsius</br>
		<input type="radio" name="con" value="Farenheit"/>Farenheit</br>
		<input type="radio" name="con" value="Kelvin"/>kelvin</br>
		<input type="submit" name="calcular"value="enviar">
	</form>
	<?php
	if(isset($_POST['cant'])){
		echo'<br><h1> Resultado:' .$resultado.'</h1>';
}
?>
</body>
</html>