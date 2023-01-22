<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css") ?>">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <style>
        h2{
            text-align: center;
            padding-top:10%;
        }
    </style>
</head>
<div class="container">
  <h2>Ingresar</h2>

  <form class="form" action="<?php echo base_url('Auth/ingresar')?>" method="post">
    <div class="campo">
      <label class="campo__label" for="email">Email:</label>
      <input type="email" class="campo__field" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="campo">
      <label class="campo__label" for="pwd">Password:</label>           
      <input type="password" class="campo__field" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
        <div class="campos">
          <li><a href="<?php echo base_url('Welcome') ?>">Registrarse</a></li>
        </div>
      
    <div class="campos">        
      <button type="submit" class="boton">Ingresar</button>
    </div>
  </form>
</div>

