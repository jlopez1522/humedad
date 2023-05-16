<?php

require_once "../model/medicion.php";

$medicion=new Medicion();


$ciudad=isset($_POST["ciudad"])? limpiarCadena($_POST["ciudad"]):"";
$lat=isset($_POST["lat"])? limpiarCadena($_POST["lat"]):"";
$lon=isset($_POST["lon"])? limpiarCadena($_POST["lon"]):"";
$humedad=isset($_POST["humedad"])? limpiarCadena($_POST["humedad"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if(!empty($ciudad)) {

			$rspta=$medicion->insertar($ciudad, $lat, $lon, $humedad);
			echo $rspta ? "Busqueda registrada": "Registro no se pudo ingresar";
		}
	break;


	case 'listar':

		$rspta=$medicion->listar();
		//Vamos a declarar un array

		$data= array();
		$a = '';

		while ($reg=$rspta->fetch_object()) {
			$a .='<div class="card text">';
			$a .='<div class="card-body">';
			$a .='<h5 class="card-title">'.$reg->ciudad.'</h5>';
			$a .='<p class="card-text"> Latitud: '.$reg->lat.'</p>';		
			$a .='<p class="card-text"> Longitud: '.$reg->lon.'</p>';
			$a .='<p class="card-text"> Humedad: '.$reg->humedad.'%</p>';		
			$a .='</div>';
			$a .='<div class="card-footer text-muted"> Fecha : '.$reg->fecha_registro.'</div>';
			$a .='</div><br>';

		}

		echo $a;
	break;
}

?>