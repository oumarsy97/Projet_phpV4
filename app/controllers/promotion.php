<?php
    include models . '/promotionModel.php';
    
    if(isset($_POST['recherche']) && $_POST['recherche'] !='' ){
        $promotions = recherche($promotions, 'libelle', $_POST['recherche']);
        $_SESSION['recherche'] = $_POST['recherche'];
        
    }
    $nbrepromo = count($promotions);
    include views . '/promotion.view.php';

