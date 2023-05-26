<?php
include ("php/conexion.php");
include ("php/ValidarSesion.php");
?>



<!DOCTYPE html>
<html>
      <head>
	       <title>Alcomex</title>
		   <meta charset="UTF-8"/>
		   <link href="css/estilos.css" rel="stylesheet">
		</head>
       <body>	
	      <header>
		      <div id="logo2">
			  <img src="img/1.jpg" alt="logo"></a>
			  </div>
			  
			  <nav class="menu">
			  <ul>
			  <li> <a href="index.html">Inicio</a> </li>
			  <li> <a href="insertar.html">Insertar</a> </li>
			  <li> <a href="actualizar.html">Actualizar</a> </li>
			  <li> <a href="buscar.html">Buscar</a> </li>
			  <li> <a href="eliminar.html">Elimnar</a> </li>
			  </ul>
			  </nav>
			  </header>
		  
		  <section div=id"Perfil">
			  <img src="img/1.png" alt="logo" height="90"></a>
			  <h1> Inicio </h1>
			  <p> Descripcion Descripcion Descripcion</p>			  
		  <section id="Recuadro">
		  
		  
		    <section id="Recuadro">
		    <h2>Mis Fotos</h2>
			
			<h3>
		  <form action="php/cambiarfoto.php" method="post" enctype="multipart/fors-data"/>
		  cambiar foto de Perfil: <input name="archivo" id="archivo" type="file" accept="jpg,jpeg.png" required/>
		      <input type="submit" name="subir" value="subir"/>	
           </form>
           </h3>		   
		  </section>
			  <section class="Recuadros">
                   <img src="img/3.png" height="200" width=280">
               </section>				   
		       <section class="Recuadros">
                   <img src="img/4.png" height="200" width=280">
               </section>	
			   <section class="Recuadros">
                   <img src="img/5.png" height="200" width=280">
               </section>	
			   <section class="Recuadros">
                   <img src="img/6.png" alt="Imagen" height="200" width=280">
               </section>	
		  </section>
		  
           <footer>
           <p> Copyright&c; 2023, Diseño web Andres Ibarguen</p>		   
	       </footer> 
        </body>	 
</html>	