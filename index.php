<?php include('header.php'); ?>
<main>
    <form action="procesar_datos.php" method="POST" class="formulario">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="lugar">¿De donde sos?:</label>
        <input type="text" name="lugar" required><br>

        <label for="pregunta1">¿Cuánta luz hay en tu casa?</label>
        <select name="pregunta1" required>
            <option value="Mucha luz">Mucha luz</option>
            <option value="Poca luz">Poca luz</option>
            <option value="Nada luz">Nada de luz</option>
        </select><br>

        <label for="pregunta2">¿Cada cuánto regas?</label>
        <select name="pregunta2" required>
            <option value="Todos los dias">Todos los dias</option>
            <option value="Dia por medio">Dia por medio</option>
            <option value="Casi nunca">Casi nunca</option>
        </select><br>

        <label for="pregunta3">¿Qué clima predomina donde vivis?</label>
        <select name="pregunta3" required>
            <option value="Humedo">Humedo</option>
            <option value="Frio">Frio</option>
            <option value="Calido">Calido</option>
        </select><br>
        <button type="submit" name="submit" value="Descargar">Descargar</button> 
    </form>
</main>

<footer>
    <p><?php echo "Hoy es: ". date('d-m-y')."."; ?> TRABAJO PRÁCTICO PHP</p>
</footer>
</body>
</html>