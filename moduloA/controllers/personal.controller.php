	<?php 
require("../models/personal.model.php");

$nombre = trim(strtoupper($_POST['nombre']));
$apellidos = trim(strtoupper($_POST['apellidos']));
$sexo = trim(strtoupper($_POST['sexo']));
$telefono = trim(strtoupper($_POST['telefono']));
$fecha_nac = trim(strtoupper($_POST['fecha_nacimiento']));
$email = trim(strtoupper($_POST['email']));
$foto = trim(strtoupper($_POST['foto']));
$DNI = trim(strtoupper($_POST['DNI']));



$persona = new Personal();
$persona->Guardar($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$foto,$DNI);

//$persona->Modificar($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$foto,$id_area, $id_oficinas);

header("Location: ../index.php");
