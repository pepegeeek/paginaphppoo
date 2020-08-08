<?php
$nombres=$_GET["nombres"];
$contraseña=$_GET["contraseña"];
$usuario=$_GET["usuario"];
$apellidos=$_GET["apellidos"];
$correo=$_GET["correo"];

echo "<h2>DATOS</h2> </br> <hr>";
echo "Los nombres son : ".$nombres."<br>";
echo "Los apellidos son : ".$apellidos."<br>";
echo "el nombre de usuario es :".$usuario."<br>";
echo "El correo es : ".$correo."<br>";
echo "La contraseña es : ".$contraseña."<br>";

require_once 'formulario.html';
?>