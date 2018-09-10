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
          if(isset($_POST['nombre'])&& isset($_POST['edad'])){ 
               $dato=$_POST['nombre'];
               $edad=$_POST['edad'];
               echo $dato."> ".$edad;
          }else{
               echo 'Datos vacios';
          }
          if(isset($_POST['cars'])){
               $auto=$_POST['cars'];
               echo '<br>'.$auto;
          }else{
               echo 'no se selecciono ningun auto';
          }
     ?>
</body>
</html>