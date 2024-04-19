<?php
    include models . '/promotionModel.php';
    //dd(promotionActive());
    $promotionActive = promotionActive();
    $_SESSION['id_promotion'] = $promotionActive['id'];
    
    if(isset($_POST['recherche']) && $_POST['recherche'] !='' ){
        $promotions = recherche($promotions, 'libelle', $_POST['recherche']);
        $_SESSION['recherche'] = $_POST['recherche'];
        
    }

    if(isset($_POST['changePromo']) && $_POST['changePromo'] !=''){
        $id_promotion = $_POST['changePromo'];
        //dd($id_promotion);
        promotionCheck($_SESSION['id_promotion'], $id_promotion);
        $_SESSION['id_promotion'] = $id_promotion;
        $promotionActive = promotionActive();
        $promotions = loadFile(promotion);
    }

    // $data = loadFile(users);
    // $new = [];
    // foreach($data as $dt){
    //     $dt['password']= hashPassword($dt['password']);
    //     $new[] = $dt;
    // }
    //  //dd($new);
    //  savefile(users, $new);

//     $password = 'monMotDePasse';
// $hashedPassword = hashPassword($password);
// //dd(verifyPassword($password, $hashedPassword));
// $password1 = 'monMotDePasse';
// $password2 = '$2y$10$nOQrV4KxJ94YLS2j11rAa.eTl4oV7n0dnu1a6XW9iwa.6l9WnZqK';

// if (verifyPassword($password1, $password2)) {
//    echo 'Le mot de passe est identique au mot de passe crypté';
//    die();
// } else {
//     // Le mot de passe saisie n'est pas identique au mot de passe crypté
// }

//     $data = loadFile(users);
//     foreach($data as $dt){
//       $a = (crypt('passer', $dt['password']) === $dt['password']);
//       dd($a);
//     }
     //dd($new);
     //savefile(users, $new);
    
    $currentPagePromo = 1;
    $itemparpage = 6;
    $nbrepromo = count($promotions);
    $nbrpage = ceil($nbrepromo / $itemparpage);
    if(isset($_POST['currentPagePromo']) && $_POST['currentPagePromo'] != ''){
        $currentPagePromo = $_POST['currentPagePromo'];
       
    }
    $promotions = paginateTable($promotions, $itemparpage, $currentPagePromo);
    include views . '/promotion.view.php';
