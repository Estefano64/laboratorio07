<!DOCTYPE html>
<html>
<head>
    <title>Registrar Agente</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Registrar Agente</h1>
    <form method="post" action="enviar_registro.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="agenteID">Agente ID:</label>
        <input type="text" id="agenteID" name="agenteID" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="departamentoID">Departamento ID:</label>
        <input type="text" id="departamentoID" name="departamentoID" required>

        <label for="numMisiones">Número de misiones:</label>
        <input type="number" id="numMisiones" name="numMisiones" required>

        <label for="descripcionMision">Descripción de la nueva misión:</label>
        <textarea id="descripcionMision" name="descripcionMision" rows="4" required></textarea>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>