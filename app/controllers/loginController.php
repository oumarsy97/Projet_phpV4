<?php
$Errmes =isset($_SESSION['Errmes'])? $_SESSION['Errmes'] : '';
?>
<div class="containermenu">
      <img src="../app/views/assets/img/logo.png" alt="" />
      <form action="index.php" method="post">
  <div class="body">
    <input type="hidden" name="action" value="login">
    <div class="mess">
      
      <span class="error log" style="color:red;"> <?php echo $Errmes;?></span>
    </div>
              
    <div>
      <label for="email">Email Adress</label>
      <input type="text" id="email" placeholder="Enter Email adress" name="email" >
    </div>
    <div>
      <label for="pwd">Password</label>
      <input type="password" id="pwd" placeholder="Enter your password" name="password" >
    </div>
  </div>
  <div class="foot">
    <div>
      <input type="checkbox" name="" id="" />
      <label for="">Remember me</label>
    </div>
    <a href="">Mot de passe Oublie?</a>
  </div>
  <button type="submit">Log in</button>
</form>
</div>