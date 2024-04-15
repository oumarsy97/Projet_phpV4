<?php
//$page = $_POST['page'];
$_SESSION['mot'] = $mot = $_POST['mot'];
$page = $_SESSION['page'];
//dd( $page);
switch($page){
    case 'promotion':
        include models .'/promotionModel.php';
        $promotions = recherche($promotions, 'libelle', $mot);
        include views . '/promotion.view.php';
        break;
    case 'referentiels':
           // dd($referentiels);
        include models .'/referentielsModel.php';
        $referentiels = referentielsPromotionActive();
        $referentiels = recherche($referentiels, 'libelle', $mot);
        include views . '/referentiels.view.php';
        break;
    case 'utilisateurs':
        include models .'/utilisateursModel.php';
        $users = recherche($_SESSION['donnee'], 'username', $mot);
        $nbr = count($users);
        $itemsPerPage = 2;
        $currentPage = 1;
        include views . '/utilisateurs.view.php';
        break;
        case 'presence':
            include models .'/presenceModel.php';
            $presences = $_SESSION['donneepresences'];
            //dd($presences);
        $presences = recherche($presences, 'name', $mot);
        include views . '/presence.view.php';
        break;
    

        $pattern = "/[0-9]{2,4}/"; // Recherche un nombre composé de 2 à 4 chiffres
}

