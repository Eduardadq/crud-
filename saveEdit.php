<?php 
include('conexao.php');

	if (isset($_POST['update'])) {
		
		$id = $_POST['id'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		$usuario = $_POST['usuario'];


		$sqlUpdate = "UPDATE user SET email = '$email', senha = '$senha', usuario ='$usuario' WHERE id = '$id'";
		$result= $connection ->query($sqlUpdate);
}


header('Location: read.php');



 ?>