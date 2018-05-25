<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <title>Feisbuk | Register</title>

    <?php 
      if(form_error('pass2_register')){ ?>
        
        <script>alert('<?php echo strip_tags(form_error("pass2_register"));?>')</script>
    <?php } ?>

    <?php 
      if(form_error('email_register')){ ?>
        
        <script>alert('<?php echo strip_tags(form_error("email_register"));?>')</script>
    <?php } ?>

    <?php 
      if(form_error('user_register')){ ?>
        
        <script>alert('<?php echo strip_tags(form_error("user_register"));?>')</script>
    <?php } ?>


  </head>
  <body>
    
    <div class="grid_login">
    	<div class="grid_title d-flex justify-content-center align-items-center">

    	<!-- <h1>Feisbuk</h1>
    	</div>
	    <form class="form-signin">
	      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
	      <h1 class="h3 mb-3 font-weight-normal">Register</h1> -->

    		<div class="text-center">
              <h1>Feisbuk</h1>
              <h3>Es gratis y lo será siempre.</h3>
            </div>
    	</div>
	    <?php 
        $attributes = array('class' => 'form-signin');
        echo form_open('elfeisbuc_controller/formularioregistro', $attributes);
      ?>"
	      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
	      <h1 class="h3 mb-3 font-weight-normal text-center">Register</h1>
	      <label for="user_register" class="sr-only">User</label>
	      <input type="text" name="user_register" id="user_register" class="form-control rounded-0" placeholder="Nick" required autofocus>

        <label for="email_register" class="sr-only">User</label>
        <input type="email" name="email_register" id="email_register" class="form-control rounded-0 mt-3" placeholder="E-mail" required autofocus>

	      <label for="pass_register" class="sr-only">Password</label>
	      <input type="password" name="pass_register" id="pass_register" class="form-control rounded-0 mt-3" placeholder="Password" required>

        <label for="pass2_register" class="sr-only">Password</label>
        <input type="password" name="pass2_register" id="pass2_register" class="form-control rounded-0 mt-3" placeholder="Confirmed password" required>
        
	      <button class="btn btn-lg btn-primary btn-block rounded-0" type="submit">Register</button>
        <p class="text-center">¿Ya tienes una cuenta? <br> Inicia sesión <a href="<?php echo base_url(); ?>index.php/elfeisbuc_controller">aquí</a></p>
      </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>