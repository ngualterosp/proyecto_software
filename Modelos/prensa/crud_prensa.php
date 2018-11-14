<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudPrensa{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo noticia
		public function insertar($rueda_prensa){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO rueda_prensa(fecha_rueda, lugar_rueda, entrada) values(:fecha_rueda,:lugar_rueda,:entrada)');
			$insert->bindValue('lugar_rueda',$rueda_prensa->getLugar());
			$insert->bindValue('entrada',$rueda_prensa->getEntrada());
			$insert->execute();

		}

		// método para mostrar todos las noticias
		public function mostrar(){
			$db=Db::conectar();
			$listaRueda=[];
			$select=$db->query('SELECT * FROM rueda_prensa');

			foreach($select->fetchAll() as $rueda_prensa){
				$myRueda= new Prensa();
				$myRueda->setCodigo($rueda_prensa['cod_rueda_prensa']);
        $myRueda->setFecha($rueda_prensa['fecha_rueda']);
				$myRueda->setLugar($rueda_prensa['lugar_rueda']);
				$myRueda->setEntrada($rueda_prensa['entrada']);
			  $myRueda->setCodigoEvento($rueda_prensa['cod_evento']);

				$listaRueda[]=$myRueda;
			}
			return $listaRueda;
		}

		// método para eliminar una rueda, recibe como parámetro el id de la noticia
		public function eliminar($codigoRueda){
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
			$myRueda= new Prensa();
			 $myRueda->setCodigo($rueda_prensa['cod_rueda_prensa']);
			 $myRueda->setFecha($rueda_prensa['fecha_rueda']);
			 $myRueda->setLugar($rueda_prensa['lugar_rueda']);
		   $myRueda->setEntrada($rueda_prensa['entrada']);
			$myRueda->setCodigoEvento($rueda_prensa['cod_evento']);
			return $myRueda;
		}

		// método para actualizar una rueda, recibe como parámetro la noticia
		public function actualizar($rueda_prensa){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE rueda_prensa SET lugar_rueda=:elLugar,entrada=:laEntrada WHERE cod_rueda_prensa=:elCodigo');
			$actualizar->bindValue('elLugar',$rueda_prensa->getLugar());
			$actualizar->bindValue('laEntrada',$rueda_prensa->getEntrada());
			
			$actualizar->bindValue('elCodigo',$rueda_prensa->getCodigo());

			$actualizar->execute();
		}
	}
?>
