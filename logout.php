<?php

  session_start();
	session_destroy();

	header('location: index.php');
	// destruimos la sesion nada mas XD

?>
