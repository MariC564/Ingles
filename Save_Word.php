<?php
include("conexion.php");

$Word = $_POST['IWord'];
$Traduccion = $_POST['ITranslation'];
$Descripcion = $_POST['IDescripcion'];

if(isset($_FILES['IImage'])) {
    $Imagen = addslashes(file_get_contents($_FILES['IImage']['tmp_name']));
} else {
    echo "No se ha subido una imagen.";
    exit;
}

$insertarDatos = "INSERT INTO words (nombre, traduccion, descripcion, img) VALUES ('$Word', '$Traduccion', '$Descripcion', '$Imagen')";

$ejecutarInsertar = $varConexion->query($insertarDatos);

if ($ejecutarInsertar) {
    header('location: Vocabulario.php');
} else {
    echo "Error al insertar los datos en la base de datos: " . $varConexion->error;
}
?>
