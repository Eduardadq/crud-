<?php 
include('conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {		
	header('Location: index.php');
	exit();
} 




		$email = mysqli_escape_string($connection, $_POST['email']);
		$senha = mysqli_escape_string($connection, $_POST['senha']);


			$query = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
			$result = mysqli_query($connection, $query);

			$row= mysqli_num_rows($result);

		
if ($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: pasteldajacinta.html');
	exit();
} else{
	header('Location: index.php');
	exit();
}

 ?>