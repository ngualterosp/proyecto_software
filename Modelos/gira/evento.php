<?php


class Evento{

	private $cod_evento;
	private $cod_gira;
	private $cod_ciudad;
	private $nom_evento;
	private $descripcion_evento;
	private $fecha_evento;




	function __construct(){}

    public function getCodigoEvento()
  	{
  		return $this->cod_evento;
  	}

  	public function setCodigoEvento($nuevoCodEvento)
  	{
  		$this->cod_evento = $nuevoCodEvento;
  	}

	public function getCodigoGira()
  	{
  		return $this->cod_gira;
  	}

  	public function setCodigoGira($nuevoCodGira)
  	{
  		 $this->cod_gira = $nuevoCodGira
  	}


  	public function getNomEvento()
  	{
  		return $this->nom_evento;
  	}

  	public function setNomEvento($nuevoNom)
  	{
  		$this->nom_evento = $nuevoNom;
  	}

  	public function getDescripcion()
  	{
  		return $this->descripcion_evento;
  	}

  	public function setDescripcion($nuevaDesc)
  	{
  		$this->descripcion_evento = $nuevaDesc;
  	}

  	public function getFecha()
  	{
  		return $this->fecha_evento;
  	}

  	public function setFecha($nuevaFecha)
  	{
  		$this->fecha_evento = $nuevaFecha;
  	}






}



?>