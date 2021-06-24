<?php
require_once("Conexion.php");

class Personal
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$foto, $dni )
	{
		$fechaActual = date('Y-m-d H:i:s');
		$foto="./imagenes/usuario.png";

		$sql = "INSERT INTO personal(id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,DNI,f_creacion)VALUES (null ,'$nombre','$apellidos','$sexo','$telefono','$fecha_nac','$email','$foto','$dni','$fechaActual');";
	

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		
	}

	public function Modificar($id_personal, $nombre,$apellidos,$telefono,$fecha_nac,$email,$dni)
	{
		$sql = "UPDATE personal SET nombre ='$nombre', apellidos = '$apellidos', telefono ='$telefono', fecha_nac = '$fecha_nac', email = '$email', DNI = '$dni' WHERE id_personal = $id_personal;";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		
	}

	public function Consultar()
	{
		$sql = "SELECT id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,f_creacion, DNI FROM personal";
		//$sql ="SELECT * FROM personal";

		if(!$response = $this->conn->query($sql)){
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}

		return $response;
	

	}

	public function MostrarPersonalUno($idpersonal)
	{
				
		$sql = "SELECT id_personal,nombre,apellidos,sexo,telefono,fecha_nac,email,foto,f_creacion,DNI FROM personal WHERE id_personal = " . $idpersonal;


		if(!$response = $this->conn->query($sql)){
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}

		$dato = $response->fetch_array(MYSQLI_ASSOC);

		return $dato;

	}
	public function MostrarPersonalAccion($idpersonal)
	{

		$sql = "SELECT nombre, apellidos FROM personal WHERE id_personal = $idpersonal;";
		
		if(!$response = $this->conn->query($sql))
		{
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}
		$data = $response->fetch_array(MYSQLI_ASSOC);

		return $data;
		$this->conn->close();
	}

}
