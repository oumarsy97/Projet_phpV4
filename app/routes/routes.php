<?php 

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'loginController';
include layouts.'/layout.php';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    include controllers . '/loginController.php';
}else{



if(isset($_POST['email']) && $_POST['email'] !='' && isset($_POST['password']) && $_POST['password'] !=''){
    //dd($_POST);
    unset($_SESSION['Errmes']);
    if(!validateEmail($_POST['email']) || !validatePassword($_POST['password'])){
        $_SESSION['Errmes'] = 'Email ou Mot de passe formats invalides';
    }
    $login = $_POST['email'];
    $password = $_POST['password'];
    $user = getUser($login, $password);
   // dd($user);
    if($user && $user['profil'] == 'admin'){
        $_SESSION['user'] = $user;
        $page = 'promotion';
        unset($_SESSION['Errmes']);

    }
    else if(isset($user) && $user['profil'] == 'user'){
       $_SESSION['user'] = $user;
       $page = 'presence';
       unset($_SESSION['Errmes']);
   }
    else{
        $page = 'loginController';
    }
} 

else{
    $_SESSION['Errmes'] = 'Email et Mot de passe requis';
}
    
    if(key_exists($page, $pages)){
        //dd($page);
        $page!='search'? $_SESSION['page'] = $page: null;
        include layouts.'/menu.php';
        ?>
 <main>
     <header>
         <?php  
include layouts.'/header.php';

?>
</header>
    <?php
    include controllers . '/' . $pages[$page ];
    include layouts.'/footer.php';
}else {
    include controllers . '/loginController.php';
}
   

}