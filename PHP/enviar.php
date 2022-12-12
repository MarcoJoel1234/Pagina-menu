<?php
    include('conexion.php');

    $comentario = $_POST['comentario'];
    $sentencia = "INSERT INTO comentarios(descripcion) values ('$comentario')";
    $query = mysqli_query($conexion, $sentencia);

    if($query){
        echo "<script>alert('Comentario enviado correctamente');
        location.href='../views/menu.php'</script>";
    }
    
?>