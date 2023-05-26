<?php
include ("conexion.php);
session_star();
$_SESSION['login']=false;

$Usuario=$_POST["Ingrese su usuario"];
$Contraseña=$_POST["Ingreso su contraseña"];

$ConsultaID = "SELECT *
             FROM  acessosistema
			 WHERE usuario ="$Usuario";
$ConsultaID=mysqli_query($conexion,$ConsultaID);
$ConsultaID=mysqli_fetch_array($ConsultaID);

if ($ConsultaID)
{

if (password_verfy($Contraseña, $ConsultaID['contraseña']))
	
$_SESSION[login]= true;
header ('Location: ../principal..html');
else
{
	echo"contraseña incorrecta";
	//echo "<br><a href=' ../index.html'></a>div>";
	header ('Location: ../principal..html');
}
else 
{
	echo"el usuario no existe"
	//echo "<br><a href=' ../index.html'> Intentalo de nuevo.</a>div>";
	header ('Location: ../principal..html');
}
mysqli_close($conexion);
?>