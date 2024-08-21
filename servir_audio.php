<?php
include("Conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT audio FROM words WHERE id = ?";
    $stmt = $varConexion->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($audio);
    $stmt->fetch();

    if ($audio) {

        header("Content-Type: audio/mpeg");
        echo $audio;
    } else {
        echo "Audio no encontrado.";
    }
} else {
    echo "ID no proporcionado.";
}
?>
