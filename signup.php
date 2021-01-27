
<?php 
include("header.php");
 ?>

 <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- Icon -->
      <div class="fadeIn first">
        <p>Registrarse</p>
      </div>
  
      <!-- Login Form -->
      <form action="includes/signup.inc.php" method="post">
              <input type="text" name="uid" placeholder="Nombre del empleado" >
              <input type="text" name="mail" placeholder="Correo" >
              <input type="text" name="cel" placeholder="Celular" >
              <input type="password" name="pwd" autocomplete="new-password" placeholder="Contraseña">
              <input type="password" name="pwd-repeat" placeholder="Repita Contraseña">
              <button type="submit"  class="btn btn-primary" style="margin: .8rem" name="signup-submit">Registrate</button>
      </form>
  
   
  
    </div>
  </div>

<?php 
include("footer.php");
 ?>