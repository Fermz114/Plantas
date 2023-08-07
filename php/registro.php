<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query = "INSERT INTO usuarios (nombre, correo, usuario, pass) VALUES ('$nombre', '$correo', '$usuario', '$password')";

$resultado = mysqli_query($cone, $query);

if ($resultado) {
    header("Location: ../index1.html");
    echo "Registro guardado correctamente.";
} else {
    echo "Error al guardar el registro: " . $conn->error;
}

mysqli_close($cone);
?>

<!-- Aquí tampoco es necesario incluir la estructura HTML -->
