<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$contraseña1 = $_POST['password1'];
$contraseña2 = $_POST['password2'];


if($contraseña1 == $contraseña2){
    $sentencia = "INSERT INTO cliente(matricula, nombre, contraseña) VALUES('$matricula', '$nombre', '$contraseña1')";
    $query = mysqli_query($conexion, $sentencia);
    if($query){
        echo "<script>alert('Te has registrado correctamente');
        location.href='../views/registrarse.php'</script>";
    }
}else{
    echo "<script>alert('Las contraseñas no coinciden');
    location.href='../views/registrarse.php'</script>";
}
?>