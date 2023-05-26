<?php
Include ("conexion.php");
$Usuario=$_POST["Ingrese su usuario"];
$Contraseña=$_POST["Ingreso su contraseña"];

$ContraseñaHash=($Contraseña, password_bcrytp);

$ConsultaID = "SELECT Usuario
             FROM  acessosistema
			 WHERE usuario ="$Usuario";
$ConsultaID=mysqli_query($conexion,$ConsultaID);
$ConsultaID=mysqli_fetch_array($ConsultaID);
if (!ConsultaID){
	echo "<br> <a href='../principal.html'>
    
Else {
     echo"Verifique sus datos";
}	 
mysqli_close($conexion);
?>