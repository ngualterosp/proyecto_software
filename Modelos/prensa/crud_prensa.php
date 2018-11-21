<?php
// incluye la clase Db
require_once('../gira/conexion.php');
require_once('RuedaPrensa.php');

	class CrudPrensa{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo noticia
		public function insertarRueda($rueda_prensa){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO rueda_prensa(cod_ciudad,  lugar_rueda, descripcion_rueda) values(:cod_ciudad,:lugar_rueda,:descripcion_rueda)');
			$insert->bindValue('cod_ciudad', $rueda_prensa->getCodigoCiudad());
			$insert->bindValue('lugar_rueda',$rueda_prensa->getLugar());
			$insert->bindValue('descripcion_rueda',$rueda_prensa->getDescripcion());
			$insert->execute();

		}

		// método para mostrar todos las noticias
		public function mostrarRuedas(){
			$db=Db::conectar();
			$listaRueda=[];
			$select=$db->query('SELECT * FROM rueda_prensa');

			foreach($select->fetchAll() as $rueda_prensa){
				$myRueda= new RuedaPrensa();
				$myRueda->setCodigoRuedaPrensa($rueda_prensa['cod_rueda_prensa']);
				$myRueda->setCodigoCiudad($rueda_prensa['cod_ciudad']);
                $myRueda->setFecha($rueda_prensa['fecha_rueda']);
				$myRueda->setLugar($rueda_prensa['lugar_rueda']);
				$myRueda->setDescripcion($rueda_prensa['descripcion_rueda']);
			    

				$listaRueda[]=$myRueda;
			}
			return $listaRueda;
		}

		// método para eliminar una rueda, recibe como parámetro el id de la noticia
		public function eliminarRueda($codigoRueda){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM rueda_prensa WHERE cod_rueda_prensa=:elCodigo');
			$eliminar->bindValue('elCodigo',$codigoRueda);
			$eliminar->execute();
		}

		// método para buscar una rueda, recibe como parámetro el id de la noticia
		public function obtenerRueda($codigoRueda){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM rueda_prensa WHERE cod_rueda_prensa=:elCodigo');
			$select->bindValue('elCodigo',$codigoRueda);
			$select->execute();
			$rueda_prensa=$select->fetch();
			$myRueda= new RuedaPrensa();
			$myRueda->setCodigoRuedaPrensa($rueda_prensa['cod_rueda_prensa']);
			$myRueda->setCodigoCiudad($rueda_prensa['cod_ciudad']);
			$myRueda->setFecha($rueda_prensa['fecha_rueda']);
			$myRueda->setLugar($rueda_prensa['lugar_rueda']);
		    $myRueda->setDescripcion($rueda_prensa['descripcion_rueda']);
			
			return $myRueda;
		}

		// método para actualizar una rueda, recibe como parámetro la noticia
		public function actualizarRueda($rueda_prensa){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE rueda_prensa SET cod_ciudad=:laCiudad, lugar_rueda=:elLugar,descripcion_rueda=:laDescripcion, fecha_rueda=:laFecha WHERE cod_rueda_prensa=:elCodigo');
			$actualizar->bindValue('elLugar',$rueda_prensa->getLugar());
			$actualizar->bindValue('laCiudad',$rueda_prensa->getCodigoCiudad());
		    $actualizar->bindValue('laFecha',$rueda_prensa->getFecha());

			$actualizar->bindValue('laDescripcion',$rueda_prensa->getDescripcion());
			$actualizar->bindValue('elCodigo',$rueda_prensa->getCodigoRuedaPrensa());

			$actualizar->execute();
		}
	}
?>
