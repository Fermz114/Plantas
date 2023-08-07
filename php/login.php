<?php
session_start();
include ("conexion.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

$validar_inicio = mysqli_query($cone, "SELECT * FROM usuarios WHERE correo = '$correo' and pass = '$password'");

if(mysqli_num_rows($validar_inicio) > 0){
    $_SESSION['correo']=$correo;
    header("location: ../index1.html");
    echo "Inicio exitoso.";
    exit;
}else{
    echo '
    <script>
        alert("usuario no existe, verifique los datos");
        window.location = "../index.php";
    </script>
    ';
    exit;
}

?>

<!-- Aquí no necesitas incluir ninguna parte de la estructura HTML -->
