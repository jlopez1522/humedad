<?php

//Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php";

Class Medicion
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un metodo para insertar registros
	public function insertar($ciudad, $lat, $lon, $humedad)
	{
		$sql = "INSERT INTO log_busqueda (`ciudad`, `lat`, `lon`, `humedad`)
		VALUES ('$ciudad', '$lat', '$lon', '$humedad')";

		return ejecutarConsulta($sql);
	}


	//Implementar un método para listar los registros
	public function listar()
	{
		$sql = "SELECT * FROM log_busqueda order by fecha_registro desc limit 0,3";
		return ejecutarConsulta($sql);
	}


}
?>