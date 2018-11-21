<?php


class RuedaPrensa{

	private $cod_rueda_prensa;
	private $cod_ciudad;
	private $fecha_rueda;
  private $lugar_rueda;
	private $descripcion_rueda;
	




	function __construct(){}

    public function getCodigoRuedaPrensa()
  	{
  		return $this->cod_rueda_prensa;
  	}

  	public function setCodigoRuedaPrensa($nuevoCodRueda)
  	{
  		$this->cod_rueda_prensa = $nuevoCodRueda;
  	}

	public function getCodigoCiudad()
  	{
  		return $this->cod_ciudad;
  	}

  	public function setCodigoCiudad($nuevoCodCiudad)
  	{
  		 $this->cod_ciudad = $nuevoCodCiudad;
  	}
    public function getFecha()
    {
      return $this->fecha_rueda;
    }

    public function setFecha($nuevofecha_rueda)
    {
       $this->fecha_rueda = $nuevofecha_rueda;
    }


  	public function getLugar()
  	{
  		return $this->lugar_rueda;
  	}

  	public function setLugar($nuevolugar_rueda)
  	{
  		$this->lugar_rueda = $nuevolugar_rueda;
  	}

  	public function getDescripcion()
  	{
  		return $this->descripcion_rueda;
  	}

  	public function setDescripcion($nuevaDesc)
  	{
  		$this->descripcion_rueda = $nuevaDesc;
  	}

  	




}



?>