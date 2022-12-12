<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles-index.css">
    <title>Iniciar sesion</title>
</head>

<body>
    <div class="filter-blur">
        <div class="container">
            <div class="cuadro">
                <div class="img-cafe"><img src="../Images/logos/cafe.gif"></div>
                <h1>Iniciar sesión</h1>
                <form action="../PHP/login.php" method="POST">
                    <input type="number" name="matricula" id="matricula" placeholder="👤 Matricula" required>
                    <input type="password" name="password" id="password" placeholder="🔒 Contraseña" required>
                    <input type="submit" id="boton" value="Iniciar sesion">
                </form>
                <a href="registrarse.php">Registrarse</a>
            </div>
        </div>
    </div>
</body>

</html>