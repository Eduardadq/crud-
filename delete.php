<?php 

include('conexao.php');
	
	if (!empty($_GET['id'])) {

	 $id = $_GET['id'];

 		 $sqlSelect = "SELECT * FROM user  WHERE id=$id";
 		 $result = $connection ->query($sqlSelect);

	
	}
	 if ($result-> num_rows > 0) {
         	
         	$sqlDeletar = "DELETE FROM user WHERE id=$id";
         	 $resultDeletar= $connection ->query($sqlDeletar);
        }
        	header('Location: read.php');



 ?>