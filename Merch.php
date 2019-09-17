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
                <li><a href="Merch.php" id="active">Merchandising</a></li>
                <li><a href="Mult.php">Multimedia</a></li>
                <li style="float:right"><a href="Index.php">Inicio</a></li>
            </ul>
        </nav>
        <section>
            <table id="merchan">
                <tr>
                    <th>
                        <img class="articulos" src="img/Merchandising/prod1.jpg" alt="error1">
                        <h3>15€</h3>
                    </th>
                    <th>
                        <img class="articulos" src="img/Merchandising/prod2.jpg" alt="error1">
                        <h3>15€</h3>
                    </th>
                    <th>
                        <img class="articulos" src="img/Merchandising/prod3.jpg" alt="error1">
                        <h3>15€</h3>
                    </th>
                </tr>
                <tr>
                    <th>
                        <img class="articulos" src="img/Merchandising/prod4.jpg" alt="error1">
                        <h3>15€</h3>
                    </th>
                    <th>
                        <img class="articulos" src="img/Merchandising/prod5.jpg" alt="error1">
                        <h3>15€</h3>
                    </th>
                    <th>
                        <img class="articulos" src="img/Merchandising/prod6.jpg" alt="error1">
                        <h3>15€</h3>
                    </th>
                </tr>
            </table>
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
