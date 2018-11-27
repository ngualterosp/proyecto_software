<?php


class Evento{

	private $cod_evento;
	private $cod_gira;
	private $cod_ciudad;
	private $nom_evento;
	private $descripcion_evento;
  private $valor_evento;
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
  		 $this->cod_gira = $nuevoCodGira;
  	}
    public function getCodigoCiudad()
    {
      return $this->cod_ciudad;
    }

    public function setCodigoCiudad($nuevoCodCiudad)
    {
       $this->cod_ciudad = $nuevoCodCiudad;
    }


  	public function getNombre()
  	{
  		return $this->nom_evento;
  	}

  	public function setNombre($nuevoNom)
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

    public function getValor()
    {
      return $this->valor_evento;
    }

    public function setValor($valorParametro)
    {
      $this->valor_evento = $valorParametro;
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