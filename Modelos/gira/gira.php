<?php

  class Gira{
  	private $cod_gira;
  	private $cod_admin;
  	private $nom_gira;
  	private $descripcion_gira;
  	private $fecha_inico;
  	private $ruta_imagen;


    function __construct(){}

  	public function getCodigoGira()
  	{
  		return $this->cod_gira;
  	}

    public function setCodigoGira($nuevoCodGira)
  	{
  		 $this->cod_gira = $nuevoCodGira;
  	}

  	public function getCodigoAdmin()
  	{
  		return $this->cod_admin;
  	}

  	public function setCodigoAdmin($codNuevo)
  	{
  		$this->cod_admin = $codNuevo;
  	}
  	public function getNombre()
  	{
  		return $this->nom_gira;
  	}

  	public function setNombre($nuevoNom)
  	{
  		$this->nom_gira = $nuevoNom;
  	}
  	public function getDescripcion()
  	{
  		return $this->descripcion_gira;
  	}

  	public function setDescripcion($nuevaDesc)
  	{
  		$this->descripcion_gira = $nuevaDesc;
  	}

  	public function getFecha()
  	{
  		return $this->fecha_inicio;
  	}

  	public function setFecha($nuevaFecha)
  	{
  		$this->fecha_inicio = $nuevaFecha;
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