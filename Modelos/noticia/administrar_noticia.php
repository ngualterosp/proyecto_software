<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_noticia.php');
require_once('noticia.php');


$crud= new CrudNoticia();
$noticia= new Noticia();

	// si el elemento insertar no viene nulo llama al crud e inserta un noticia
	if (isset($_POST['submit'])) {
	if (isset($_POST['insertar'])) {
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		if($check !== false){
				$image = $_FILES['image']['tmp_name'];
				$imgContent = addslashes(file_get_contents($image));
				$db = Db::conectar();
				if($db->connect_error){
						die("Connection failed: " . $db->connect_error);
				}

				//Insert image content into database
				$insert = $db->query("INSERT into noticia (ruta_imagen) VALUES ('$imgContent')");
				if($insert){
						echo "File uploaded successfully.";
				}else{
						echo "File upload failed, please try again.";
				}
		}else{
				echo "Please select an image file to upload.";
		}
}
		$noticia->setTitular($_POST['titular_noticia']);
		$noticia->setEntrada($_POST['entrada_noticia']);
		$noticia->setRuta(addslashes(file_get_contents($_FILES['ruta_imagen']['tmp_name'])));
		//llama a la función insertar definida en el crud
		$crud->insertar($noticia);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el noticia
	}elseif(isset($_POST['actualizar'])){
		$noticia->setCodigo($_POST['cod_noticia']);
		$noticia->setTitular($_POST['titular']);
		$noticia->setEntrada($_POST['entrada']);
		$crud->actualizar($noticia);
		header('Location: ../../noticias/noticiasAdmin.php');

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un noticia6
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['cod_noticia']);
		header('Location: ../../noticias/noticiasAdmin.php');
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
