<?php

  class Ciudad{
  	private $cod_ciudad;
  	private $cod_pais;
  	private $nom_ciudad;
  	

    function __construct(){}

  	public function getCodigoCiudad()
  	{
  		return $this->cod_ciudad;
  	}

    public function setCodigoCiudad($nuevoCodCiudad)
  	{
  		 $this->cod_ciudad = $nuevoCodCiudad;
  	}

  	public function getCodigoPais()
  	{
  		return $this->cod_pais;
  	}

  	public function setCodigoPais($codNuevo)
  	{
  		$this->cod_pais = $codNuevo;
  	}
  	public function getNombre()
  	{
  		return $this->nom_ciudad;
  	}

  	public function setNombre($nuevoNom)
  	{
  		$this->nom_ciudad = $nuevoNom;
  	}
  	

    }

    ?>