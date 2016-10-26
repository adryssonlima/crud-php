<?php

	$link = mysqli_connect("localhost", "root", "", "users");

	if (mysqli_connect_error()) {
	    exit();
	}

	//echo "Conectado com sucesso!";

	//mysqli_close($link);

?>
