<?php 
include('conexao.php');

$id = $_GET['id'];

  $sqlSelect = "SELECT * FROM user  WHERE id=$id";
  $result = $connection ->query($sqlSelect);

      if ($result-> num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
                 $usuario = $user_data ['usuario'];
                 $senha = $user_data ['senha'];
                 $email = $user_data ['email'];
        }

      } else {
          header('Location: read.html');
      }


 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,800;1,800&display=swap" rel="stylesheet">    
    <title>ler</title>

</head>
<body>
   
      <div id="corpo">
       <h1>editar</h1>
          <form action="saveEdit.php" method="POST">
              <div class="mb-3">
                   <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" value="<?php echo $email ?>" name="email">
               </div>

         <div class="mb-3">
            <label for="usuario" class="form-label">usuario</label>
          <input type="text" class="form-control" value="<?php echo $usuario ?>" name="usuario" >
        
         </div>
             
              <div class="mb-3">
                  <label for="senha" class="form-label">Password</label>
                    <input type="password" class="form-control" value="<?php echo $senha ?>" name="senha">
          </div>

                <input  type="hidden" name="id" value="<?php echo $id ?>"></input>
               <button type="submit" name= "update" id="update" class="btn btn-primary">Eitar</button>
        </form>
         </div>
         

</body>
</html>