<?php
    include models . '/promotionModel.php';
    $_SESSION['id_promotion'] = promotionActive()['id'];
    
    if(isset($_POST['recherche']) && $_POST['recherche'] !='' ){
        $promotions = recherche($promotions, 'libelle', $_POST['recherche']);
        $_SESSION['recherche'] = $_POST['recherche'];
        
    }

    if(isset($_POST['changePromo']) && $_POST['changePromo'] !=''){
        $id_promotion = $_POST['changePromo'];
        promotionCheck($_SESSION['id_promotion'], $id_promotion);
        $_SESSION['id_promotion'] = $id_promotion;
        $promotions = loadFile(promotion);
    }





    $currentPagePromo = 1;
    $itemparpage = 6;
    $nbrepromo = count($promotions);
    $nbrpage = ceil($nbrepromo / $itemparpage);
    if(isset($_POST['currentPagePromo']) && $_POST['currentPagePromo'] != ''){
        $currentPagePromo = $_POST['currentPagePromo'];
       
    }
    $promotions = paginateTable($promotions, $itemparpage, $currentPagePromo);
    include views . '/promotion.view.php';

