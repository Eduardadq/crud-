
<?php

include('conexao.php');

$usuario = mysqli_real_escape_string($connection, $_POST['usuario']);
$senha = mysqli_real_escape_string($connection, $_POST['senha']);
$email = mysqli_real_escape_string($connection, $_POST['email']);

$sql = "select count(*) as total from user where usuario = '$usuario' and email = '$email'";

$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    header("Location: entrar.php");
    exit();
}

$sql = "INSERT INTO user (usuario, senha, email) VALUES ('$usuario', '$senha', '$email')";

mysqli_query($connection, $sql);

header("Location: read.php");

?>