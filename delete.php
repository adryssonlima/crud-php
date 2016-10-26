
<?php

require 'connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM users.user WHERE id='$id'";

if(mysqli_query($link, $sql)){
    header('Location: index.php');
}else{
	echo "Erro! " . mysqli_error();
}

mysqli_close($link);
