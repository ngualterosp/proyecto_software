<?php
class Producto{

	private $cod_producto;
	private $cod_categoria;
	private $cod_genero;
	private $nom_producto;
	private $descripcion_producto;
	private $valor_producto;
	private $cantidad;
	private $ruta_imagen;

	function __construct(){}



	public function getCodigoProducto()
	{
		return $this->cod_producto;
	}

	public function setCodigoProducto($nuevoCodigo)
	{
		$this->cod_producto = $nuevoCodigo;
	}

	public function getCodigoCategoria()
	{
		return $this->cod_categoria;
	}

	public function setCodigoCategoria($nuevoCodigo)
	{
		$this->cod_categoria = $nuevoCodigo;
	}

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
		return $this->nom_producto;
	}

	public function setNombre($elNuevoNombre)
	{
		$this->nom_producto = $elNuevoNombre;
    }



    public function getDescripcion()
	{
		return $this->descripcion_producto;
	}


	public function setDescripcion($laDes)
	{
		$this->descripcion_producto = $laDes;
	}

	public function getValor()
	{
		return $this->valor_producto;
	}


	public function setValor($elValor)
	{
		$this->valor_producto = $elValor;
	}

	public function getCantidad()
	{
		return $this->cantidad;
	}

	public function setCantidad($nuevaCant)
	{
		$this->cantidad = $nuevaCant;
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