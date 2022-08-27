<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,800;1,800&display=swap" rel="stylesheet">    
    <title>cadastro</title>

</head>
<body>
   
      <div id="corpo">
     <h1>login</h1>
        <form action="cadastro.php" method="POST">
         <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
          </div>

         <div class="mb-3">
         <label for="usuario" class="form-label">usuario</label>
          <input type="text" class="form-control" name="usuario" >
         </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Password</label>
          <input type="password" class="form-control" name="senha">
          </div>

         <button type="submit" class="btn btn-primary">Submit</button>
        </form>
         </div>

</body>
</html>