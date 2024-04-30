<?php
// Incluir archivo de conexión a la base de datos
require_once 'modelo/conexion.php';

// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $agenteID = $_POST["agenteID"];
    $password = $_POST["password"]; // Obtener la contraseña sin hashear
    $departamentoID = $_POST["departamentoID"];
    $numMisiones = $_POST["numMisiones"];
    $descripcionMision = $_POST["descripcionMision"];

    // Hashear la contraseña utilizando el algoritmo bcrypt
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Preparar la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO agentes (nombre_agente, agente_id, password_hash, departamento_id, num_misiones, descripcion_mision) VALUES ('$nombre', '$agenteID', '$passwordHash', '$departamentoID', '$numMisiones', '$descripcionMision')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Agente registrado exitosamente.";
        echo '<div class="text-center"> href="login.php">Loguearte</a> </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}