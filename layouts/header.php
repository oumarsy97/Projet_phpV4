
<main>
  <?php 
  $name = $_SESSION['user'];
  
  //dd($name);
  ?>
    <header>
        <div>
          <label for="burger-checkbox" class="burger"><img src="../app/views/assets/img/menu.png" alt=""></label>
          <div class="cercle"><img src="../app/views/assets/img/icon1.png" alt=""></div>
          <div class="search-bar">
            <form action="" method="post">
              <input type="text" placeholder="" name="mot"  value="<?= isset($_SESSION['mot'])? $_SESSION['mot'] : '' ?>"/>
              <input type="hidden" name="page" value="search">
              
            </form>
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
          </div>
        </div>
        <div class="right">
          <div class="date">
            <i class="fa fa-calendar" aria-hidden="true" for="#date" style="z-index: 1;"></i>
            <input type="date" name="date" id="date" value="<?= $_SESSION['date'] ?? date('Y-m-d') ?>">
          </div>
          <div class="cercle2"> <img src="../app/views/assets/img/admin.png" alt=""></div>
          <div style="display: flex;align-items: center;flex-direction: column;margin-left: 10px">
            <p style="font-size: 26px;font-weight: 600;"><?=   $_SESSION['user']['profil'] == 'admin' ? 'Admin': 'user' ?></p>
            <button type="submit" style="width: 120px;height: 35px;border-radius: 5px;background-color: red;color: #fff;position: relative;top: 0px;right: 0px;font-weight: 600;padding: 10px;display: flex;align-items: center;justify-content: space-between;" ><i class="fa-solid fa-right-from-bracket fa-1x"></i><span>Deconnexion</span></button>
          </div>
        </div>
      </header>  
</main>