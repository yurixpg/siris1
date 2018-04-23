<?php
require_once 'mostra-alerta-index.php';
?>
<!doctype html>
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link href="css/teste.css" rel="stylesheet" >
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container"><br></br>
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="login.php" role="login">
          <img src="imagens/siris.png" class="img-responsive" alt="" />
          <input type="text"= name="matricula" placeholder="Matrícula" required class="form-control input-lg" value="" />
          
          <input type="password" class="form-control input-lg" name="senha" placeholder="Senha" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Acessar</button>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
          
        </form>
        

      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
    
  
  
</div>