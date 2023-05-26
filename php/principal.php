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
		      <div id="logo">
			  <img src="img/1.png" alt="logo" height="90"></a>
			  </div>
			  
			  <nav class="menu">
			  <ul>
			       <li> <a href="principal.html">Inicio</a> </li>
			       <li> <a href="insertar.html">Insertar</a> </li>
			       <li> <a href="actualizar.html">Actualizar</a> </li>
			       <li> <a href="buscar.html">Buscar</a> </li>
			       <li> <a href="eliminar.html">Elimnar</a> </li>
				   <li> <a href="index.html">cerrar sesion</a> </li>
			   </ul>
			  </nav>
	        </header>
			  <!--=============================================
    MOSTRAR ELEMENTOS
    =============================================-->
		  <div>
		  <section id="perfil">
			  <img src="img/2.png" alt="logo" height="180"></a>
			  <h1> Inicio </h1>
			  <hr>
			  <hr>
			  <p> Bienvenido al sistema de facturacion y seguimiento de mercancias en la empresa Alcomex</p>			  
              <hr>	
              <hr>			  
		  </section>
		  </div>
		  <div>
		  
		  <section id="recuadros">
			  <img src="img/3.png"  height="150">
			  <h2> Mis Amigos </h2>
			  
			  <section class="recuadro"> 
			  <img src="img/4.png" height="150" >
			  <h2>Amigo1</h2>		      
			  <p class="parrafo"> 
			  Descripcion Descripcion Descripcion</p>		  
		      <a href="" class="boton">Ver Perfil</a><br></br>
			  </section>
			  
			  <section class="recuadro"> 
			  <img src="img/4.png" height="150" >
			  <h2>Amigo2</h2>		      
			  <p class="parrafo"> 
			  Descripcion Descripcion Descripcion</p>		  
		      <a href="" class="boton">Ver Perfil</a><br></br>
			  </section>			  
		     	  
		      <section class="Recuadro">
			  <img src="img/2.png" alt="logo"   height="150">
			  <h2> Amigo3</h2>
			  <p> Descripcion Descripcion Descripcion</p>	
			  <a href="" class="boton"> Ver Perfil</a><br></br>
		     </section>				 
              </div>
			  <div>
	 </section>	
	         	
			 
		  <section id="recuadros">
		    <h2>Mis Fotos</h2>
			  <section class="recuadro">
                   <img src="img/3.png" height="200" width=280">
               </section>				   
		       <section class="recuadro">
                   <img src="img/4.png" height="200" width=280">
               </section>	
			   <section class="recuadro">
                   <img src="img/5.png" height="200" width=280">
               </section>	
			   <section class="recuadro">
                   <img src="img/6.png" alt="Imagen" height="200" width=280">
               </section>	
		  </section>
		  </div>
           <footer>
           <p> Copyright&c; 2023, Diseño web Andres Ibarguen</p>		   
	       </footer> 
        </body>	 
</html>		