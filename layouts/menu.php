
<?php
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
$action = ( $user['profil'] !== 'admin');
?>
<input type="checkbox" id="burger-checkbox" class="burger-checkbox" /> 
    <aside>
      <img src="logo.png" alt="" />
      <p>- MENU</p>
      <nav>
        <li>
        <a href="?page=dashboard"> <i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
        </li>
        <li>
             <i class="fa fa-building" aria-hidden="true"></i>
            <form action="" method="post"> 
                <input type="hidden" name="page" value="promotion">
                <button id="monBouton" <?php if ($action): ?>disabled<?php endif; ?>>Promos</button>
       
                </form>
         
        </li>
        <li>
        <form action="" method="post"> 
         <i class="fa fa-calendar" aria-hidden="true"></i>   
                <input type="hidden" name="page" value="referentiels">
                <button <?php if ($action): ?>disabled<?php endif; ?>>Referentiels</button>
            </form>
        </li>
        <li >
            <i class="fa fa-user-circle-o" aria-hidden="true"></i> 
           <form action="" method="post"> 
                <input type="hidden" name="page" value="utilisateurs">
                <button <?php if ($action): ?>disabled<?php endif; ?>>utilisateurs</button>
            </form>
        </li>
        <li>
             <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <form action="" method="post"> 
                <input type="hidden" name="page" value="visiteurController">
                <button <?php if ($action): ?>disabled<?php endif; ?>>Visiteurs</button>
            </form>
         
        </li>
        <li>
          <i class="fa fa-user-circle-o" aria-hidden="true"></i> 
        
        <form action="" method="post"> 
                <input type="hidden" name="page" value="presence">
                <button>Presence</button>
            </form>
        </li>
        <li>
             <i class="fa fa-calendar-minus" aria-hidden="true"></i>
            <form action="" method="post"> 
                <input type="hidden" name="page" value="evenementsController">
                <button>Evenements</button>
            </form>
         
        </li>
      </nav>
    </aside>

<div class="iconeparametre"><i class="fa-solid fa-gear"></i></div>
