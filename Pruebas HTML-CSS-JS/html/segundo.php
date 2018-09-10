<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
     <h1>Segunda pagina</h1>
     <a href="index.php">Retornar</a>
     <br>
     <?php 
          if(isset($_GET['nombre'])&& isset($_GET['edad'])){ 
               $dato=$_GET['nombre'];
               $edad=$_GET['edad'];
               echo $dato."> ".$edad;
          }else{
               echo 'Datos vacios';
          }
          if(isset($_GET['cars'])){
               $auto=$_GET['cars'];
               echo '<br>'.$auto;
          }else{
               echo 'no se selecciono ningun auto';
          }
     ?>
</body>
</html>