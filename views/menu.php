<?php
include('../PHP/conexion.php');
include('../PHP/sentencias.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles-menu.css">
    <title>Cafeteria UPT</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logos">
                <div class="logo-UPT">
                    <img src="../Images/logos/logo-upt.png" alt="">
                </div>
                <div class="logo-cafe">
                    <img src="../Images/logos/logo-cafeteria.png" alt="">
                </div>
                <div class="logo-ing">
                    <img src="../Images/logos/logo-ing.png" alt="">
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#platillos">Comida</a></li>
                    <li><a href="#bebida">Bebidas</a></li>
                    <li><a href="#frituras">Fritura</a></li>
                    <li><a href="../PHP/logOut.php">Cerrar sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="inicio">
        <h1>¡Bienvenido a la Cafeteria UPT!</h1>
        <p>Disfruta de nuestros platillos</p>
    </section>

    <section id="platillos">
        <h2>Platillos del dia</h2>
    </section>
    <section id="titulo-platillo">
        <h2>Comidas</h2>
    </section>
    <section id="comida">
        <div class="carrusel">
            <div class="grande1">
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida1);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida2);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida3);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida4);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida5);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida7);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida8);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida8);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida9);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $comida10);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
            </div>
            <ul class="puntos">
                <li class="punto activo"></li>
                <li class="punto">.</li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
            </ul>
        </div>
    </section>

    <section id="titulo-platillo">
        <h2>Bebidas</h2>
    </section>
    <section id="bebida">
        <div class="carrusel">
            <div class="grande2">
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida1);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida2);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida3);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida4);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida5);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida6);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida7);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida8);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida9);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $bebida10);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['precio'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
            </div>
            <ul class="puntos">
                <li class="punto activo"></li>
                <li class="punto">.</li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
                <li class="punto"></li>
            </ul>
        </div>
    </section>

    <section id="titulo-platillo">
        <h2>Frituras</h2>
    </section>
    <section id="frituras">
        <div class="carrusel">
            <div class="grande3">
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura1);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura2);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura3);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura4);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura5);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura6);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura7);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura8);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura9);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
                <div class="div-plati">
                    <?php
                        $resultado = mysqli_query($conexion, $fritura10);
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $precio = $row['costo'];
                        ?>
                    <h3><?php echo $nombre;?></h3>
                    <p><?php echo $descripcion;?></p>
                    <p class="precio"><?php echo '$' . $precio . ' pesos'; }?></p>
                </div>
            </div>
            <ul class="puntos">
                <li class="punto activo" id="punto_comida"></li>
                <li class="punto" id="punto_comida">.</li>
                <li class="punto" id="punto_comida"></li>
                <li class="punto" id="punto_comida"></li>
                <li class="punto" id="punto_comida"></li>
                <li class="punto" id="punto_comida"></li>
                <li class="punto" id="punto_comida"></li>
                <li class="punto" id="punto_comida"></li>
                <li class="punto" id="punto_comida"></li>
                <li class="punto" id="punto_comida"></li>
            </ul>
        </div>
    </section>

    <section id="contactos">
        <div class="container">
            <h4>Gracias por tu visita</h4>
            <p>Danos tu opinion:</p>
            <form action="../PHP/enviar.php" method="post">
                <textarea name="comentario" id="textarea" cols="30" rows="10" placeholder="Mensaje"></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>Mas sobre nosotros</p>
            <div class="redes-sociales">
                <a href="https://www.facebook.com/UniversidadPolitecnicadeTecamac" target="_blank"><img
                        src="../Images/logos/facebook.png" alt="Facebook"></a>
                <a href="https://www.youtube.com/@universidadpolitecnicadete5372" n target="_blank"><img
                        src="../Images/logos/youtube.png" alt="Youtube"></a>
                <a href="http://uptecamac.edomex.gob.mx/" target="_blank"><img src="../Images/logos/logo-upt.png"
                        alt="Universidad Politecnica de Tecamac"></a>
            </div>
            <p id="copy">© 2022 Marco Joel Angel Velasco</p>
        </div>
    </footer>

    <script src="../JS/animaciones.js"></script>
</body>
</html>