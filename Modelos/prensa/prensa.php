<?php
	class Prensa{
		private $cod_rueda_prensa;
		private $cod_evento;
		private $fecha_rueda;
		private $lugar_rueda;
		private $entrada;

		function __construct(){}

		public function getCodigo()
		{
			return $this->cod_rueda_prensa;
		}

		public function setCodigo($codNuevo)
		{
		    $this->cod_rueda_prensa = $codNuevo;
		}

		public function getFecha()
		{
		return $this->fecha_rueda;
		}

		public function setFecha($fecha)
		{
			$this->fecha_rueda = $fecha;
		}

		public function getLugar()
		{
		return $this->lugar_rueda;
		}

		public function setLugar($lugar)
		{
			$this->lugar_rueda = $lugar;
		}

		public function getEntrada()
		{
		return $this->entrada;
		}

		public function setEntrada($entradaNueva)
		{
			$this->entrada = $entradaNueva;
		}

		public function getCodigoEvento()
		{
			return $this->$cod_evento;
		}

		public function setCodigoEvento($codNuevoEvento)
		{
			$this->cod_evento = $codNuevoEvento ;
		}

	}
?>
