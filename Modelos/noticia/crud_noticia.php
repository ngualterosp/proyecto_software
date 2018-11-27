<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudNoticia{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo noticia
		public function insertar($noticia){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO noticia(titular_noticia, entrada_noticia, cod_admin, ruta_imagen) values(:titular_noticia,:entrada_noticia,1,:ruta_imagen)');
			$insert->bindValue('titular_noticia',$noticia->getTitular());
			$insert->bindValue('entrada_noticia',$noticia->getEntrada());
			$insert->bindValue('ruta_imagen',$noticia->getRuta());
			$insert->execute();

		}

		// método para mostrar todos las noticias
		public function mostrar(){
			$db=Db::conectar();
			$listaNoticias=[];
			$select=$db->query('SELECT * FROM noticia');

			foreach($select->fetchAll() as $noticia){
				$myNoticia= new Noticia();
				$myNoticia->setCodigo($noticia['cod_noticia']);
				$myNoticia->setTitular($noticia['titular_noticia']);
				$myNoticia->setEntrada($noticia['entrada_noticia']);
				$myNoticia->setFecha($noticia['fecha_noticia']);
			    $myNoticia->setCodigoAdmin($noticia['cod_admin']);

				$listaNoticias[]=$myNoticia;
			}
			return $listaNoticias;
		}

		// método para eliminar una noticia, recibe como parámetro el id de la noticia
		public function eliminar($codigoNoticia){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM noticia WHERE cod_noticia=:elCodigo');
			$eliminar->bindValue('elCodigo',$codigoNoticia);
			$eliminar->execute();
		}

		// método para buscar una noticia, recibe como parámetro el id de la noticia
		public function obtenerNoticia($codigoNoticia){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM noticia WHERE cod_noticia=:elCodigo');
			$select->bindValue('elCodigo',$codigoNoticia);
			$select->execute();
			$noticia=$select->fetch();
			$myNoticia= new Noticia();
			$myNoticia->setCodigo($noticia['cod_noticia']);
			$myNoticia->setTitular($noticia['titular_noticia']);
			$myNoticia->setEntrada($noticia['entrada_noticia']);
			$myNoticia->setFecha($noticia['fecha_noticia']);
			$myNoticia->setCodigoAdmin($noticia['cod_admin']);
			return $myNoticia;
		}

		// método para actualizar un noticia, recibe como parámetro la noticia
		public function actualizar($noticia){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE noticia SET titular_noticia=:elTitular,entrada_noticia=:laEntrada  WHERE cod_noticia=:elCodigo');
			$actualizar->bindValue('elTitular',$noticia->getTitular());
			$actualizar->bindValue('laEntrada',$noticia->getEntrada());

			$actualizar->bindValue('elCodigo',$noticia->getCodigo());

			$actualizar->execute();
		}
	}
?>
