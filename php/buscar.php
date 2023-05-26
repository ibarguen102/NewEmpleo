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
				   <li> <a href="index.html">Cerrar</a> </li>
			  </ul>
			  </nav>
	      </header>
			  <!--=============================================
    MOSTRAR ELEMENTOS
    =============================================-->
		  
		  <section id="perfil">
			  <img src="img/2.png" alt="logo" height="150"></a>
			  <h1> Inicio </h1>
			  <p> Si desea consultar alguna envio puede realizarlo digitando el numero de Referencia</p>			  
		  </section>
		  
		  <section id="recuadros">
			  <img src="img/3.png"  height="150">
			  <h2> Facturas</h2>
			  <p class="parrafo"> 
			  Descripcion Descripcion Descripcion</p>
              Referencia:<input type="search" name="Referencia"  placeholder=" Ingrese numero de refencia" required>
			  <br></br>			  
		      <a href="" class="boton">Consultar</a><br></br>
		      <section id="recuadro">
		       <h2>Mis Amigos</h2>	
    <?php
	$Consulta = "select *
	                 FROM transacción p
					 where p.ID_trasaccion in (select A.ID_Cliente
					                           FROM Cliente a
											   where A.ID_Cliente='$ID_Cliente')
											   limit 3";
						$datos = mysqli_query(%conexion, $Consulta)	;
                        while($fila=mysqli_fetch_array($datos)){	
     ?>	

			   
		      <section class="Recuadro">
			  <img src=<?php echo $fila ['Nombre']?>"   height="150">
			  <h2> <?php echo ['Nombre'] . "" .$fila['Dirección'] ?></h2>
			  <p class="parrafo">
			  <?php echo $fila['Teléfono'] ?>
   			  </p>	
			  <a href=" <?php echo"principal.php?nickname=".fila['nickname']?> class="boton"> Ver Perfil</a><br></br>
		     </section>		
              <?php
			     }
		       ?>
			 
	         </section>	
			 
		  <section id="recuadros">
		    <h2>Mis Fotos</h2>
			<?php
			  $Consulta = "Select *
			               FROM fotos F
						   where F.nickname='$nickname'
						   LIMIT 3";
					$datos = mysqli_query($conexion, $Consulta);
                    while ($fila=mysqli_fetch_array($datos))
             ?>			

			 
			  <section class="recuadro">
                   <img src="<?php echo $fila['Nombrefoto']?>  height="200" width=280">
               </section>
            <?php
			      }
			?>
			   
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
		  
           <footer>
           <p> Copyright&c; 2023, Diseño web Andres Ibarguen</p>		   
	       </footer> 
        </body>	 
</html>		