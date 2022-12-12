<?php
include('conexion.php');
$matricula = $_POST['matricula'];
$contraseña = $_POST['password'];

$sentencia = "SELECT * FROM cliente";
$query = mysqli_query($conexion, $sentencia);

if($query){
    $row = mysqli_fetch_array($query);
    if($row['matricula'] == $matricula && $row['contraseña'] == $contraseña){
        echo "<script>alert('Bienvenido');
        location.href='../views/menu.php'</script>";
    }else{
        echo "<script>alert('Usuario o contraseña incorrectos');
        location.href='../views/index.php'</script>";
    }
}else{
    echo "Error en la consulta";
}
?>