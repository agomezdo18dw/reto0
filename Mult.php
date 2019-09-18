<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Reto0/Actores</title>
    <link rel="stylesheet" href="css/merchan.css">
    <?php $fechaPHP = date('Y/m/d - H:i:s');?>
    <script src="js/js.js"></script>
</head>
<body>
    <div id="container">
        <header>
            <div id="reloj" class="reloj">Cargando Fecha y hora...</div>
        </header>
        <nav>
            <ul>
                <li><a href="Desc.php">Descripcion</a></li>
                <li><a href="Temp.php">Temporadas</a></li>
                <li><a href="Act.php">Actores</a></li>
                <li><a href="Merch.php">Merchandising</a></li>
                <li><a href="Mult.php" id="active">Multimedia</a></li>
                <li style="float:right"><a href="Index.php">Inicio</a></li>
            </ul>
        </nav>
        <section>
           <center>
               <h2>Video 1</h2>
               <iframe src="https://www.youtube.com/embed/N1HMCArgqWM?rel=0&showinfo=0" style="width:500px; height:300px"></iframe>
                <p>Esta es la secuencia de inicio (opening) de la serie</p>
                <br>
                <h2>Video 2</h2>
                <iframe src="https://www.youtube.com/embed/aUVhTqN7Nps?=rel=0&start=9" style="width:500px; height:300px"></iframe>
                <p>Hace no mucho sacaron una película, y éste es el trailer</p>
            </center>
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
