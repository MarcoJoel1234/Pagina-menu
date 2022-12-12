<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles-registro.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="filter-blur">
        <div class="container">
            <div class="cuadro">
                <div class="img-cafe"><img src="../Images/logos/cafe.gif"></div>
                <h1>Cafetería UPT</h1>
                <form action="../PHP/registrarse.php" method="post">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                    <input type="number" name="matricula" id="matricula" placeholder="Matricula" required>
                    <input type="password" name="password1" id="password" placeholder="Contraseña" required>
                    <input type="password" name="password2" id="password" placeholder="Repetir contraseña" required>
                    <input type="submit" id="boton" value="Registrarse">
                </form>
                <a href="index.php">Iniciar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>