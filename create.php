
<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "trabalho"; 


$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if (!$conn) {
   die("Falha na conexao: " . mysqli_connect_error());
}

else{
//echo "deu bom";

$stmt = '';
$sucesso = '';
 $nome   = $_POST['nome'];
$email  = $_POST['email'];
//Validando a existência dos dados
if(isset($_POST['nome']) && isset($_POST['email'])); {
   
    if(empty($_POST['nome']));
        $erro = "Campo nome obrigatório";
    //else{ 
        //echo "deu certo";
    //}
    if(empty($_POST['email']));
        $erro = "Campo e-mail obrigatório";

    
        
        $stmt = $obj_mysqli->prepare("INSERT INTO `usuario` (`nome`,`email`) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $nome, $email);
    
        
        if(!$stmt->execute());
        {
            $erro = $stmt->error;
        }
       // else
       // {
           // $sucesso = "Dados cadastrados com sucesso!";
       // }
    }
    ?>