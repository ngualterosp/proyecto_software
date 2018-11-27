<?php
// incluye la clase Db
require_once('conexion.php');
require_once("producto.php");
require_once("genero.php");
require_once("categoria.php");


	class CrudProducto{
		// constructor de la clase
		public function __construct(){}





        public function obtenerGenero($codigogenero)
        {

        	$db=Db::conectar();
        	$select= $db->prepare('SELECT * FROM genero WHERE cod_genero=:cod_genero');
        	$select->bindValue('cod_genero', $codigogenero);
        	$select->execute();
        	$generoRegistro = $select->fetch();
        	$elGenero = new Genero();
        	$elGenero->setCodigoGenero($generoRegistro['cod_genero']);
        	$elGenero->setNombre($generoRegistro['nom_genero']);
        	$elGenero->setRuta($generoRegistro['ruta_imagen']);

        	return $elGenero;
        }

        public function mostrarGeneros()
        {

        	$db=Db::conectar();
        	$select= $db->query('SELECT * FROM genero');
        	$listaGeneros=[];

        	foreach ($select->fetchAll() as $genero)

        	{

        		$elGenero = new Genero();
        		$elGenero->setCodigoGenero($genero['cod_genero']);
        		$elGenero->setNombre($genero['nom_genero']);

        		$listaGeneros[]=$elGenero;

        	}
        	return $listaGeneros;

        }


		public function insertarCategoria($categoria)
		{
			$db=Db::conectar();
			$insert = $db->prepare('INSERT INTO categoria(nom_categoria, ruta_imagen) values(:nom_categoria, :ruta_imagen)');
			$insert->bindValue('nom_categoria', $categoria->getNombre());
			$insert->bindValue('ruta_imagen', $categoria->getRuta());
			$insert->execute();
		}


		public function mostrarCategorias()
		{
		    $db=Db::conectar();
		    $listaCategorias=[];
		    $select=$db->query('SELECT * FROM categoria');
		    foreach ($select->fetchAll() as $categoria )
		    {

		    	$laCategoria = new Categoria();
		    	$laCategoria->setCodigoCategoria($categoria['cod_categoria']);
		    	$laCategoria->setNombre($categoria['nom_categoria']);
		        $laCategoria->setRuta($categoria['ruta_imagen']);



		      	$listaCategorias[] = $laCategoria;


		    }


		    return $listaCategorias;

		}

		public function actualizarCategoria($categoria){
			$db=Db::conectar();
	        $actualizar=$db->prepare('UPDATE categoria SET nom_categoria=:nom_categoria WHERE cod_categoria=:cod_categoria');

	        $actualizar->bindValue('nom_categoria',$categoria->getNombre());

			$actualizar->bindValue('cod_categoria',$categoria->getCodigoCategoria());



			$actualizar->execute();
		}

		public function obtenerCategoria($codigoCategoria)
		{
            $db=Db::conectar();
			$select=$db->prepare('SELECT * FROM categoria WHERE cod_categoria=:cod_categoria');
			$select->bindValue('cod_categoria',$codigoCategoria);
			$select->execute();
			$categoria=$select->fetch();
			$laCategoria= new Categoria();
			$laCategoria->setCodigoCategoria($categoria['cod_categoria']);
			$laCategoria->setNombre($categoria['nom_categoria']);
			$laCategoria->setRuta($categoria['ruta_imagen']);
			return $laCategoria;
		}

		// método para insertar, recibe como parámetro un objeto de tipo noticia
		public function insertarProducto($producto){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO producto(cod_categoria, cod_genero, nom_producto, descripcion_producto, valor_producto, cantidad, ruta_imagen) values
				(:cod_categoria,:cod_genero, :nom_producto,:descripcion_producto,:valor_producto, :cantidad, :ruta_imagen)');
			$insert->bindValue('cod_categoria',$producto->getCodigoCategoria());
			$insert->bindValue('cod_genero',$producto->getCodigoGenero());
			$insert->bindValue('nom_producto',$producto->getNombre());
		    $insert->bindValue('descripcion_producto',$producto->getDescripcion());
			$insert->bindValue('valor_producto',$producto->getValor());
			$insert->bindValue('cantidad',$producto->getCantidad());
			$insert->bindValue('ruta_imagen',$producto->getRuta());
			$insert->execute();

		}

		// método para mostrar todos las noticias
		public function mostrarProductos($categoria){
			$db=Db::conectar();
			$listaProductos=[];
			$codigoCategoria = (integer)($categoria);
			$select=$db->prepare('SELECT * FROM producto WHERE cod_categoria=:codigo GROUP BY cod_genero');
			$select->bindValue('codigo', $codigoCategoria);
			$select->execute();





			foreach($select->fetchAll() as $producto){


				$elProducto= new Producto();
				$elProducto->setCodigoProducto($producto['cod_producto']);
				$elProducto->setCodigoCategoria($producto['cod_categoria']);
				$elProducto->setCodigoGenero($producto['cod_genero']);
				$elProducto->setNombre($producto['nom_producto']);
				$elProducto->setDescripcion($producto['descripcion_producto']);
			    $elProducto->setValor($producto['valor_producto']);
			    $elProducto->setCantidad($producto['cantidad']);
			    $elProducto->setRuta($producto['ruta_imagen']);

				$listaProductos[]=$elProducto;
			}
			return $listaProductos;
		}

		// método para eliminar una noticia, recibe como parámetro el id de la noticia
		public function eliminarProducto($codigoProducto){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM producto WHERE cod_producto=:cod_producto');
			$eliminar->bindValue('cod_producto',$codigoProducto);
			$eliminar->execute();
		}

		// método para buscar una noticia, recibe como parámetro el id de la noticia
		public function obtenerProducto($codigoProducto){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM producto WHERE cod_producto=:cod_producto');
			$select->bindValue('cod_producto',$codigoProducto);
			$select->execute();
			$producto=$select->fetch();
			$elProducto= new Producto();
			$elProducto->setCodigoProducto($producto['cod_producto']);
			$elProducto->setCodigoCategoria($producto['cod_categoria']);
			$elProducto->setCodigoGenero($producto['cod_genero']);
			$elProducto->setNombre($producto['nom_producto']);
			$elProducto->setDescripcion($producto['descripcion_producto']);
			$elProducto->setValor($producto['valor_producto']);
			$elProducto->setCantidad($producto['cantidad']);
			$elProducto->setRuta($producto['ruta_imagen']);
			return $elProducto;
		}

		// método para actualizar un noticia, recibe como parámetro la noticia
		public function actualizarProducto($producto){
			$db=Db::conectar();

			if($producto->getCodigoGenero() == 0)
			{
            $actualizar=$db->prepare('UPDATE producto SET cod_categoria=:cod_categoria,nom_producto=:nom_producto,descripcion_producto=:descripcion_producto, valor_producto = :valor_producto,cantidad=:cantidad,ruta_imagen=:ruta_imagen  WHERE cod_producto=:cod_producto');
            $actualizar->bindValue('cod_producto',$producto->getCodigoProducto());
	        $actualizar->bindValue('cod_categoria',$producto->getCodigoCategoria());
	        $actualizar->bindValue('valor_producto',$producto->getValor());

			$actualizar->bindValue('nom_producto',$producto->getNombre());
            $actualizar->bindValue('descripcion_producto',$producto->getDescripcion());
			$actualizar->bindValue('ruta_imagen',$producto->getRuta());
			$actualizar->bindValue('cantidad',$producto->getCantidad());


			$actualizar->execute();

}


			else
			{
				$actualizar=$db->prepare('UPDATE producto SET cod_categoria=:cod_categoria, cod_genero=:cod_genero,nom_producto=:nom_producto,descripcion_producto=:descripcion_producto,ruta_imagen=:ruta_imagen  WHERE cod_producto=:cod_producto');
			$actualizar->bindValue('cod_producto',$producto->getCodigoProducto());
	        $actualizar->bindValue('cod_categoria',$producto->getCodigoCategoria());
	        $actualizar->bindValue('cod_genero',$producto->getCodigoGenero());

			$actualizar->bindValue('nom_producto',$producto->getNombre());
            $actualizar->bindValue('descripcion_producto',$producto->getDescripcion());
			$actualizar->bindValue('ruta_imagen',$producto->getRuta());


			$actualizar->execute();
		}

		}
	}
?>
