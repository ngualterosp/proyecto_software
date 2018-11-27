<?php
	class Noticia{
		private $cod_noticia;
		private $titular_noticia;
		private $entrada_noticia;
		private $fecha_noticia;
		private $cod_admin;
		private $ruta_imagen;

		function __construct(){}

		public function getCodigo()
		{
			return $this->cod_noticia;
		}

		public function setCodigo($codNuevo)
		{
		    $this->cod_noticia = $codNuevo;
		}

		public function getTitular(){
		return $this->titular_noticia;
		}

		public function setTitular($titular){
			$this->titular_noticia = $titular;
		}

		public function getEntrada(){
			return $this->entrada_noticia;
		}

		public function setEntrada($entrada){
			$this->entrada_noticia = $entrada;
		}

		public function getFecha(){
		return $this->fecha_noticia;
		}

		public function setFecha($fechaNueva){
			$this->fecha_noticia = $fechaNueva;
		}
		public function getCodigoAdmin(){
			return $this->cod_admin;
		}
		public function setCodigoAdmin($codNuevoAdmin){
			$this->cod_admin = $codNuevoAdmin ;
		}

		public function getRuta()
  	{
  		return $this->ruta_imagen;
  	}

  	public function setRuta($nuevaRuta)
  	{
  		$this->ruta_imagen = $nuevaRuta;
  	}

	}
?>
