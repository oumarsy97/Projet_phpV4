
<main>
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
          <div class="cercle"> <img src="../app/views/assets/img/admin.png" alt=""></div>
          <div>
            <p>SUPER ADMIN</p>
            <select name="user">
              <option value="ADMIN">ADMIN</option>
            </select>
          </div>
        </div>
      </header>  
</main>