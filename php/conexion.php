<?php

	$cons_usuario = "root";

	$cons_passw = "12345678";

	$cons_base_datos = "green";

	$cons_equipo = "127.0.0.1";

$cone = mysqli_connect($cons_equipo,$cons_usuario,$cons_passw,$cons_base_datos);



if($cone)
{
	//echo "conexion exitosa a la base de datos";
}
else{
	//echo "error en la conexion";
}

?>
