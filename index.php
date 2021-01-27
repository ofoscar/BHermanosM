<?php 
include("header.php");
 ?>

<?php
if(isset($_SESSION['userId'])){
    Header("Location: home.php");
}
else{
    echo '<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- Icon -->
      <div class="fadeIn first">
        <p>BHermanos</p>
      </div>
  
      <!-- Login Form -->
      <form action="includes/login.inc.php" method="post">
        <input type="text" id="login" class="fadeIn second" name="id" placeholder="Numero de empleado">
        <input type="password" id="password" autocomplete="new-password" class="fadeIn third" name="contrasena" placeholder="Contraseña">
        <input type="submit" name="login-submit" class="fadeIn fourth" value="Iniciar Sesion">
      </form>
  
   
  
    </div>
  </div>';
}

?>

 

<?php 
include("footer.php");
 ?>