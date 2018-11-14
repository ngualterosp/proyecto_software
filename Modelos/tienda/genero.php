<?php
class Genero{

	private $cod_genero;
	private $nom_genero;
	private $ruta_imagen;

	function __construct(){}



	public function getCodigoGenero()
	{
		return $this->cod_genero;
	}

	public function setCodigoGenero($nuevoCodigo)
	{
		$this->cod_genero = $nuevoCodigo;
	}

	public function getNombre()
	{
		return $this->nom_genero;
	}

	public function setNombre($elNuevoNombre)
	{
		$this->nom_genero = $elNuevoNombre;
    }

    public function getRuta()
	{
		return $this->ruta_imagen;
	}

	public function setRuta($nuevaCat)
	{
		$this->ruta_imagen = $nuevaCat;
	}

}
?>