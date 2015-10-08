<?php
/*Esto inicia un bloque de codigo en php*/
$usr= $_GET['usuario'];
$pass= $_GET['contraseña'];
$loginok=false;/*Sirve para saber si el usuario y clave son validos o no. Sie es
false quiere decir que el usuario o el password no son validos. Si es true,
entonces el user y pass son permitidos*/
$uservalidok=false;/*Sirve para saber si el usuario existe o no*/
$passok=false;/*Sirve para saber si el password es correcto o no*/
/*Lista de usuarios válidos*/
$usuarios=array("rctorr","zuave","uriel","aura","monica","Perlis");
$passwords=array("12357tor","123456ve","1234567I","12345678","12777897","55512343");
/*Para acceder a un elemento del array se usa: $usuarios[0]->"rctorr"*/
for($i=0; $i<=5; $i+=1 ){
	/*Comprar la variable usr con cada elemento de la lista de usuarios*/
	if ($usuarios[$i]==$usr){
		/*Este bloque se ejecuta si la condicion es verdadera, y eso es cuando se
		imgresa un usuario valido */
			if($passwords[$i]==$pass){
					$loginok=true;
					$uservalidok=true;
					$passok=true;
					break;
				}else{
				$loginok=false;
				$passok=false;
				}
			}else{
			$loginok=false;
			$uservalidok=false;
		}

}/*termina el for*/
/*
$loginok<-true cuando el user y pass son validos o correctos
$loginok<-false cuando el usuario y/o el pass no son válidos
*/
if(!$loginok){
	echo "lo siento no esta autorizado";
}
else{
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
}/*Termina bloque autorizado*/
?>
