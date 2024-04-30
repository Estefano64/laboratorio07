<?php
session_start();

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $passwordIngresada = $_POST["password"];

        $sql = $conexion->query("SELECT * FROM agentes WHERE nombre_agente = '$usuario'");

        if ($datos = $sql->fetch_object()) {
            $passwordHash = $datos->password_hash;

            // Verificar si la contraseña ingresada coincide con el hash almacenado
            if (password_verify($passwordIngresada, $passwordHash)) {
                $_SESSION["agente_id"] = $datos->agente_id;
                $_SESSION["nombre"] = $datos->nombre_agente;
                $_SESSION["numMisiones"] = $datos->num_misiones;
                $_SESSION["descripcionMision"] = $datos->descripcion_mision;
                header("location: inicio.php");
            } else {
                echo "<div class='alert alert-danger'>Acceso denegado</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
    } else {
        echo "Campos vacíos";
    }
}