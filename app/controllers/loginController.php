<div class="containermenu">

      <img src="../app/views/assets/img/logo.png" alt="" />
      <form action="index.php" method="post">
  <input type="hidden" name="page" value="promotion">
  <div class="body">
    <input type="hidden" name="action" value="login">
    <div class="mess">
      Email et Mot de passe requis
    </div>
    <div>
      <label for="email">Email Adress</label>
      <input type="text" id="email" placeholder="Enter Email adress" name="email" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
    </div>
    <div>
      <label for="pwd">Password</label>
      <input type="password" id="pwd" placeholder="Enter your password" name="password" required>
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