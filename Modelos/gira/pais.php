<?php

  class Pais{
  	private $cod_pais;
  	private $nom_pais;
  	
  	

    function __construct(){}

  	public function getCodigoPais()
  	{
  		return $this->cod_pais;
  	}

    public function setCodigoPais($nuevoCodPais)
  	{
  		 $this->cod_pais = $nuevoCodPais;
  	}

  	public function getNombre()
  	{
  		return $this->nom_pais;
  	}

  	public function setNombre($nombre)
  	{
  		$this->nom_pais = $nombre;
  	}
  
  	

    }

    ?>