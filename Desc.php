<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Reto0/Descripcion</title>
    <link rel="stylesheet" href="css/Descripcion.css">
    <?php $fechaPHP = date('Y/m/d - H:i:s');?>
    <script src="js/js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.translate.js"></script>
    <script type="text/javascript" src="js/Diccionario.js"></script>
</head>
<body>
    <div id="container">
        <header>
            <div id="reloj" class="reloj">Cargando Fecha y hora...</div>
	    <div id="idiomas">
		<div class="nose" onclick="cambiarIdioma('es')">
			<img src="img/banderas/banderaEspa%C3%B1a.webp">
		</div>
		<div class="nose" onclick="cambiarIdioma('en')">
			<img src="img/banderas/bandera-ingl%C3%A9s.png.webp">
		</div>
		<div class="nose" onclick="cambiarIdioma('eu')">
			<img src="img/banderas/ikurri%C3%B1a.png">
		</div>
    </div>
        </header>
        <nav>
            <ul>
                <li><a href="Desc.php" class="trn" data-trn-key="desc"><label>Descripcion</label></a></li>
                <li><a href="Temp.php" class="trn" data-trn-key="temp">Temporadas</a></li>
                <li><a href="Act.php" class="trn" data-trn-key="act">Actores</a></li>
                <li><a href="Merch.php" class="trn" data-trn-key="merch">Merchandising</a></li>
                <li><a href="Mult.php" class="trn" data-trn-key="mult">Multimedia</a></li>
                <li style="float:right"><a href="Index.php" id="active" class="trn" data-trn-key="ini">Inicio</a></li>
            </ul>
        </nav>
        <section>
            <h2 class="trn" data-trn-key="TituloDesc">Descripcion</h2>
            <p class="trn" data-trn-key="DescripcionParrafo">Oficialmente se dice que durante la guerra de Vietnam, el coronel Samuel Morrison 
                ordena al A-Team que ataque el Banco de Hanoi para ayudar a la finalización de la guerra. 
                El A-Team completa la misión con éxito, pero al volver a la base estadounidense cuatro 
                días después del fin de la guerra, la encuentran en ruinas por un ataque del Viet Cong y 
                todos los soldados muertos, también el coronel Samuel Morrison. Como no se pudo demostrar 
                que cumplían órdenes de un superior, ya que no quedaron pruebas de la misión, 
                fueron encarcelados en Fort Bragg por el ataque al banco, pero no tardaron en fugarse. 
                En la versión para cine es modificada por un hecho similar desarrollado en Irak.
            </p>
            <img src="img/equipoA2.jpg">
                
        </section>
        <footer>
            <p>Adrián Gómez, Samuel Rodríguez, Iñigo Perez @ Zubiri manteo
                <script>
                    document.write('<?php echo "$fechaPHP";?>');
                </script>
            </p>
        </footer>
    </div>
</body>
</html>
