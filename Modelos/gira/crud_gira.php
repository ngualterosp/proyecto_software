<?php
// incluye la clase Db
require_once('conexion.php');
require_once("gira.php");

	class CrudGira{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo noticia
		public function insertar($gira){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO gira(cod_admin, nom_gira, descripcion_gira) values(1,:nom_gira,:descripcion_gira)');
			
			$insert->bindValue('nom_gira',$gira->getNombre());
			$insert->bindValue('descripcion_gira',$gira->getDescripcion());
			$insert->execute();

		}

		// método para mostrar todos las noticias
		public function mostrar(){
			$db=Db::conectar();
			$listaGiras=[];
			$select=$db->query('SELECT * FROM gira');



			foreach($select->fetchAll() as $gira){


				$myGira= new Gira();
				$myGira->setCodigoGira($gira['cod_gira']);

				$myGira->setCodigoAdmin($gira['cod_admin']);
				$myGira->setNombre($gira['nom_gira']);
				$myGira->setDescripcion($gira['descripcion_gira']);
			    $myGira->setFecha($gira['fecha_inicio']);
			    $myGira->setRuta($gira['ruta_imagen']);

				$listaGiras[]=$myGira;
			}
			return $listaGiras;
		}

		// método para eliminar una noticia, recibe como parámetro el id de la noticia
		public function eliminar($codigoGira){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM gira WHERE cod_gira=:elCodigo');
			$eliminar->bindValue('elCodigo',$codigoGira);
			$eliminar->execute();
		}

		// método para buscar una noticia, recibe como parámetro el id de la noticia
		public function obtenerGira($codigoGira){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM gira WHERE cod_gira=:elCodigo');
			$select->bindValue('elCodigo',$codigoGira);
			$select->execute();
			$gira=$select->fetch();
			$myGira= new Gira();
			$myGira->setCodigoGira($gira['cod_gira']);
			$myGira->setCodigoAdmin($gira['cod_admin']);
			$myGira->setNombre($gira['nom_gira']);
			$myGira->setDescripcion($gira['descripcion_gira']);
			$myGira->setFecha($gira['fecha_inicio']);
			$myGira->setRuta($gira['ruta_imagen']);
			return $myGira;
		}

		// método para actualizar un noticia, recibe como parámetro la noticia
		public function actualizar($gira){
			$db=Db::conectar();
	        $actualizar=$db->prepare('UPDATE gira SET nom_gira=:nom_gira,descripcion_gira=:descripcion_gira,ruta_imagen=:ruta_imagen  WHERE cod_gira=:cod_gira');
			$actualizar->bindValue('nom_gira',$gira->getNombre());
            $actualizar->bindValue('descripcion_gira',$gira->getDescripcion());
			$actualizar->bindValue('ruta_imagen',$gira->getRuta());
			$actualizar->bindValue('cod_gira',$gira->getCodigoGira());

			
			$actualizar->execute();
		}
	}
?>