<?php
class Categoria{

	private $cod_categoria;
	private $nom_categoria;
	private $ruta_imagen;

	function __construct(){}



	public function getCodigoCategoria()
	{
		return $this->cod_categoria;
	}

	public function setCodigoCategoria($nuevoCodigo)
	{
		$this->cod_categoria = $nuevoCodigo;
	}

	public function getNombre()
	{
		return $this->nom_categoria;
	}

	public function setNombre($elNuevoNombre)
	{
		$this->nom_categoria = $elNuevoNombre;
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