
<?php

require 'connection.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE users.user SET nome='$nome', email='$email', senha='$senha' WHERE id='$id';";

if(mysqli_query($link, $sql)){
    header('Location: index.php');
}else{
	echo "Erro! " . mysqli_error();
}

mysqli_close($link);

?>
