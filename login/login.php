<?php
$usuario=$_GET["usuario"];
$contraseña=$_GET["contraseña"];

echo "<h2>Datos</h2> </br> <hr>";
echo "el nombre de usuario es: " .$usuario."<br>";
echo "la contraseña es : " .$contraseña."<br>";

require_once 'login.html';
?>