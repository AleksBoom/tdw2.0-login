<?php
/*Esto inicia un bloque de codigo en php*/
$usr= $_GET['usuario'];
$pass= $_GET['contraseña'];
if($usr!='carlos' || $pass !="1234567" ) {
		echo"Registrate";
}
else {



/*Esto termina un bloque de codigo php*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/main.css">
   <title>Index</title>
</head>

<body>
    <header> <!-- encabezado -->
                <aside> <span class="naranja">Mi primer login</span> </aside>
                <nav>
                    <a class="activo" href="index.html">Inicio</a>
                    |
                    <a href=" ">Ingresar</a>
                    |
                    <a href=" ">Nuevo usuario</a>
                </nav>
    </header>
		<div id="contenido_incorrecto">

		 <div id="mensaje_incorrecto" >
				 <article>
							<p> Bienvenido </p>
							<?php
							echo $usr; 
							 ?>
				</article>
			</div> <!-- termina mensaje-->
		</div> <!--termina contenido-->

        <footer>
             <p>Copyleft: TDW2.0</p>

        </footer>

</body>
</html>
<?php
}/*Termina bloque autorizado
?>
