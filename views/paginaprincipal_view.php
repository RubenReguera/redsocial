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
  
