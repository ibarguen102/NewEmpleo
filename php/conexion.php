<?php
$servidor = "127.0.0.1:3306";
$usuario = "root";
$contraseña="Masterkey2023";
$BD = "acolmexbd";
$conexion=mysqli_connect ($servidor,$usuario,$contraseña,$BD,);
if (!$conexion){
	echo"Error de Autenticacion<br>";
	die("conecction failed :". mysqli_connect_error());
}
/*else {
    echo "Conexion Exitosa";	
}*/
?>