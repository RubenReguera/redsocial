<<<<<<< HEAD
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <title>El Feisbuc </title>
  </head>
  <body>
    
    <div class="inicio_view d-flex justify-content-center align-items-center">
      <div class="grid_title">
        <div class="text-center">
         <a href="<?php echo base_url(); ?>index.php/elfeisbuc_controller/paginaprincipal"><h1>El Feisbuc</h1></a> 
          <h3>Es gratis y sin anuncios</h3>
        </div>
        <div class="box_links d-flex justify-content-center mt-3">
          <a href=" <?php echo base_url(); ?>index.php/elfeisbuc_controller " class="btn btn-success shadow rounded-0">Iniciar sesión</a>
          <a href="<?php echo base_url(); ?>index.php/elfeisbuc_controller/registro" class="btn btn-warning shadow rounded-0 ml-1">Registrarse</a>
        </div>
      </div>
      
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
=======
<?php 
  session_start();
  $_SESSION["favcolor"] = "green";
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">El Feisbuc</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>index.php/elfeisbuc_controller/paginaprincipal">Página principal</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/elfeisbuc_controller/mipagina">Mi página</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Mi perfil</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Cerrar sesión</a></li>
    </ul>
  </div>
</nav>
  
>>>>>>> master
