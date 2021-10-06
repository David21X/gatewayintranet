<?php
	class modelo_grafico{
		private $conexion;
		function __construct()
		{
			require_once('../../order_tracking/db/conexion.php');
			$this->conexion = new conexion();
			$this->conexion->conectar();
        }

		function traerDatosGraficosBar(){
			$sql = "CALL SUMA_CANTIDAD_P";	
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
	}
?>