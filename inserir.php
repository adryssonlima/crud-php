
<?php

require 'connection.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO user VALUES(default, '$nome', '$email', '$senha')";

if(mysqli_query($link, $sql)){
	header('Location: index.php');
}else{
	mysqli_error();
	echo "Erro ao inserir dados. :( ";
}

mysqli_close($link);

?>
