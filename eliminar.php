<?php
include("conexionDB.php");
$id_usuario = $_GET['id'];

mysqli_query($conexion_db, "DELETE FROM usuarios WHERE id=$id_usuario");

header('Location: panel.php');
