<?php
include controllers . '/usersController.php';
include controllers . '/loginController.php';
if(isset($_POST['email']) && $_POST['email'] !=''){
    //dd($_POST);
    $login = $_POST['email'];
    $password = $_POST['password'];
    $user = getUser($login, $password);
   // dd($user);
    if($user && $user['profil'] == 'admin'){
        $_SESSION['user'] = $user;
        $page = 'dashboard';

    }

} else if(isset($user) && $user['profil'] == 'user'){
    $_SESSION['user'] = $user;
   include views.'/dashboard.view.php';
}
