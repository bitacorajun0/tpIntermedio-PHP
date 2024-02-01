<?php include('header.php'); ?>
<main>
    <h2>Listado de Usuarios</h2>

    <section class="usuarios">

        <?php 
        include("conexionDB.php");
        $consulta = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexion_db, $consulta);
        while ($mostrar_datos = mysqli_fetch_assoc($resultado)) {
            ?>

            <div class="caja_usuarios">
                <h3> <?php echo "Nombre: " .  $mostrar_datos['nombre']; ?> </h3>
                <h4> <?php echo "¿Donde vive? " . "<br>" . $mostrar_datos['lugar'] . "<br>"
                            . "¿Cuánta luz hay en tu casa? " . "<br>" . $mostrar_datos['pregunta1'] . "<br>"
                            . "¿Cada cuánto regas? " . "<br>" .  $mostrar_datos['pregunta2'] . "<br>"
                            . "¿Qué clima predomina? " . "<br>" .  $mostrar_datos['pregunta3']; ?> </h4><br>
                <p><a href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>">Eliminar</a></p><br>

            </div>

        <?php } ?>

    </section>

</main>

<footer>
    <p><?php echo "Hoy es: " . date('d-m-y') . "."; ?> TRABAJO PRÁCTICO PHP</p>
</footer>

</body>

</html>