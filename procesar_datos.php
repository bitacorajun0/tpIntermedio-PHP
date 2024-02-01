<?php
include("conexionDB.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"];
    $lugar = $_POST["lugar"];
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];

    $resultado = mysqli_query($conexion_db, "INSERT INTO usuarios VALUES (DEFAULT, '$nombre', '$lugar', '$pregunta1', '$pregunta2', '$pregunta3')");

    $contenido = "Hola ".$_POST['nombre']. ", espero que el clima en ".$_POST['lugar']." te encuentre bien."."\n".
    "Te recuerdo tus respuesta para que elijas las plantas que mejor se adapten a vos!"."\n"."\n".
    "¿Cuánta luz hay en tu casa? " . $_POST['pregunta1'] . "\n".
    "¿Cada cuánto regas " . $_POST['pregunta2'] . "\n".
    "¿Qué clima predomina donde vivis? " . $_POST['pregunta3'] . "\n"."\n".
    "Si en tu casa hay mucha luz lo mejor que podes tener son lavandas."."\n".
    "Si en tu casa hay poca luz lo mejor que podes tener son hiedras."."\n".
    "Si en tu casa no hay nada de luz lo mejor que podes tener son cactus."."\n".
    "Si regas todos los dias mejor tene a tus plantas en agua, los potus quedan muy bien."."\n".
    "Si regas dia por medio podes tener helechos."."\n".
    "Si no regas casi nunca las sansevierias son para vos"."\n".
    "Para los climas calidos mejor tener suculentas."."\n".
    "Para los climas humedos lucite con calatheas."."\n".
    "Y para los climas frios hacele honor al durillo."."\n"."\n".
    "Gracias por participar!"."\n";
    $archivo = 'plantas.txt';

    file_put_contents($archivo, $contenido);
 
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $archivo . '"');
    readfile($archivo);

    unlink($archivo);
    exit;
}
?>