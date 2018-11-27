<?php
// incluye la clase Db
require_once('conexion.php');
require_once("gira.php");
require_once("evento.php");
require_once("pais.php");
require_once("ciudad.php");

	class CrudGira{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo noticia
		public function insertar($gira){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO gira(cod_admin, nom_gira, descripcion_gira, ruta_imagen) values(1,:nom_gira,:descripcion_gira, :ruta_imagen)');

			$insert->bindValue('nom_gira',$gira->getNombre());
			$insert->bindValue('descripcion_gira',$gira->getDescripcion());
			$insert->bindValue('ruta_imagen',$gira->getRuta());
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
			$eliminarEventos = $db->prepare('DELETE FROM evento where cod_gira=:cod_gira');
			$eliminarEventos->bindValue('cod_gira', $codigoGira);
			$eliminarEventos->execute();
			$eliminar=$db->prepare('DELETE FROM gira WHERE cod_gira=:elCodigo');
			$eliminar->bindValue('elCodigo',$codigoGira);
			$eliminar->execute();
		}


		public function eliminarEvento($codEvento)
		{
			$db = Db::conectar();
			$eliminar = $db->prepare('DELETE FROM evento where cod_evento=:cod_evento');
		    $eliminar->bindValue('cod_evento', $codEvento);
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

		public function obtenerUltimos3Eventos($codGira)
		{

			$listaEventos=[];
	        $db=Db::conectar();
		     $select=$db->prepare('SELECT  DISTINCT * FROM evento WHERE   cod_gira = :cod_gira ORDER BY cod_evento DESC LIMIT 3');
		     $select->bindValue('cod_gira', $codGira);

		     $select->execute();
		     foreach ($select->fetchAll() as $registro)
		     {

		     	$elEvento = new Evento();
		     	$elEvento->setCodigoEvento($registro['cod_evento']);
		     	$elEvento->setCodigoGira($registro['cod_gira']);
		     	$elEvento->setCodigoCiudad($registro['cod_ciudad']);
		     	$elEvento->setNombre($registro['nom_evento']);
		     	$elEvento->setDescripcion($registro['descripcion_evento']);
		     	$elEvento->setValor($registro['valor_evento']);
		     	$elEvento->setFecha($registro['fecha_evento']);

		     	$listaEventos[] = $elEvento;

		     }
		     return $listaEventos;
		}

		public function obtenerUltimas3Giras()
		{

			$listaGiras=[];
	        $db=Db::conectar();
		    $select=$db->prepare('SELECT  DISTINCT * FROM gira ORDER BY cod_gira DESC LIMIT 3');

		    $select->execute();
		     foreach ($select->fetchAll() as $registro)
		     {

		     	$laGira = new Gira();

		     	$laGira->setCodigoGira($registro['cod_gira']);
		     	$laGira->setCodigoAdmin($registro['cod_admin']);
		     	$laGira->setNombre($registro['nom_gira']);
		     	$laGira->setDescripcion($registro['descripcion_gira']);
		     	$laGira->setFecha($registro['fecha_inicio']);
		     	$laGira->setRuta($registro['ruta_imagen']);

		     	$listaGiras[] = $laGira;

		     }
		     return $listaGiras;
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

		public function actualizarEvento($evento)
		{
			$db = Db::conectar();
			$actualizar = $db->prepare('UPDATE evento set  cod_gira =:cod_gira, cod_ciudad =:cod_ciudad, nom_evento=:nom_evento, descripcion_evento=:descripcion_evento, valor_evento =:valor_evento, fecha_evento=:fecha_evento WHERE cod_evento =:cod_evento');
			$actualizar->bindValue('cod_gira', $evento->getCodigoGira());
			$actualizar->bindValue('cod_ciudad', $evento->getCodigoCiudad());
			$actualizar->bindValue('nom_evento', $evento->getNombre());
			$actualizar->bindValue('descripcion_evento', $evento->getDescripcion());
			$actualizar->bindValue('valor_evento', $evento->getValor());
			$actualizar->bindValue('fecha_evento', $evento->getFecha());
			$actualizar->bindValue('cod_evento', $evento->getCodigoEvento());
			$actualizar->execute();
		}

		public function insertarEvento($evento)
		{
			$db = Db::conectar();
			$insert = $db->prepare('INSERT INTO evento(cod_gira, cod_ciudad, nom_evento, descripcion_evento, valor_evento) values(:cod_gira, :cod_ciudad, :nom_evento,:descripcion_evento, :valor_evento)');

			$insert->bindValue('cod_gira',$evento->getCodigoGira());
			$insert->bindValue('cod_ciudad',$evento->getCodigoCiudad());
			$insert->bindValue('nom_evento',$evento->getNombre());
			$insert->bindValue('descripcion_evento',$evento->getDescripcion());
			$insert->bindValue('valor_evento', $evento->getValor());


			$insert->execute();
		}

		public function mostrarEventos($codigoGira)
		{
			$db=Db::conectar();
			$listaEventos=[];
			$select =$db->prepare('SELECT * from evento where cod_gira=:cod_gira');
			$select->bindValue('cod_gira', $codigoGira);
			$select->execute();
			foreach($select->fetchAll() as $evento){


				$elEvento= new Evento();
				$elEvento->setCodigoEvento($evento['cod_evento']);
				$elEvento->setCodigoGira($evento['cod_gira']);
				$elEvento->setCodigoCiudad($evento['cod_ciudad']);
				$elEvento->setNombre($evento['nom_evento']);
				$elEvento->setDescripcion($evento['descripcion_evento']);
				$elEvento->setValor($evento['valor_evento']);
			    $elEvento->setFecha($evento['fecha_evento']);


				$listaEventos[]=$elEvento;
			}
			return $listaEventos;
		}

		public function obtenerEvento($codEvento)
		{
			$db = Db::conectar();
			$select = $db->prepare('SELECT * from evento where cod_evento =:cod_evento');
			$select->bindValue('cod_evento', $codEvento);
			$select->execute();
			$registro = $select->fetch();
			$elEvento = new Evento();
			$elEvento->setCodigoEvento($registro['cod_evento']);
			$elEvento->setCodigoGira($registro['cod_gira']);
			$elEvento->setCodigoCiudad($registro['cod_ciudad']);
			$elEvento->setNombre($registro['nom_evento']);
			$elEvento->setDescripcion($registro['descripcion_evento']);
			$elEvento->setValor($registro['valor_evento']);

			$elEvento->setFecha($registro['fecha_evento']);

			return $elEvento;
		}

		public function listarCiudades()
		{
			$listaCiudades=[];
			$db = Db::conectar();
			$select = $db->prepare('SELECT * from ciudad');
			$select->execute();
			foreach ($select->fetchAll() as $registroCiudad)
			{
				$laCiudad = new Ciudad();
				$laCiudad->setCodigoCiudad($registroCiudad['cod_ciudad']);
				$laCiudad->setCodigoPais($registroCiudad['cod_pais']);
				$laCiudad->setNombre($registroCiudad['nom_ciudad']);
				$listaCiudades[]= $laCiudad;
			}
			return $listaCiudades;
		}

		public function obtenerPais($codCiudad)
		{
			$db=Db::conectar();
			$select = $db->prepare('SELECT pais.cod_pais, pais.nom_pais from pais, ciudad where pais.cod_pais = ciudad.cod_pais AND ciudad.cod_ciudad = :cod_ciudad');
			$select->bindValue('cod_ciudad', $codCiudad);
			$select->execute();

			$registro = $select->fetch();
			$pais = new Pais();
			$pais->setCodigoPais($registro['cod_pais']);
			$pais->setNombre($registro['nom_pais']);
			return $pais;

		}

		public function obtenerCiudad($codigoCiudad)
		{
			$db=Db::conectar();
			$select = $db->prepare('SELECT * from ciudad where cod_ciudad =:cod_ciudad');
			$select->bindValue('cod_ciudad', $codigoCiudad);
			$select->execute();

			$registro = $select->fetch();
			$ciudad = new Ciudad();
			$ciudad->setCodigoCiudad($registro['cod_ciudad']);
			$ciudad->setCodigoPais($registro['cod_pais']);
			$ciudad->setNombre($registro['nom_ciudad']);

			return $ciudad;

		}
	}
?>
