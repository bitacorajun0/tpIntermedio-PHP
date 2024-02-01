<?php

$conexion_db =  mysqli_connect("localhost", "root", "1234", "utnPhp") or exit ("No se pudo conectar a la base de datos");

$consulta_tabla = "SHOW TABLES LIKE 'usuarios'";
$resultado_tabla = mysqli_query($conexion_db, $consulta_tabla);

if (mysqli_num_rows($resultado_tabla) == 0) {
    $sql_usuarios = "CREATE TABLE usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50),
        lugar VARCHAR(50),
        pregunta1 VARCHAR(15),
        pregunta2 VARCHAR(15),
        pregunta3 VARCHAR(15)
    )";

    if (mysqli_query($conexion_db, $sql_usuarios)) {
        //echo "Tabla 'usuarios' creada con éxito.";
    } else {
        echo "Error al crear la tabla 'usuarios': " . mysqli_error($conexion_db);
    }
} else {
    //echo "La tabla 'usuarios' ya existe.";
}
