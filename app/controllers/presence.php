<?php

require_once models . '/presenceModel.php';
$presences = presenceAtDate(date('Y-m-d'));
//dd($presences);
$referentiels = referentielsActives();
 isset($_SESSION['donneepresences']) ? $donneePresence = $_SESSION['donneepresences'] : $_SESSION['donneepresences'] = $presences;

if(isset($_POST['statut']) && isset($_POST['referentiel']) && isset($_POST['datechoice'])){
    $presences = filter_presence($_POST['statut'], $_POST['referentiel'], $_POST['datechoice']);
    $_SESSION['donneepresences'] = $presences;
    $_SESSION['statut'] = $_POST['statut'];
    $_SESSION['referentiel'] = $_POST['referentiel'];
    $_SESSION['datechoice'] = $_POST['datechoice'];
}

$currentPagePresence = 1;
$itemparpage = 2;

//dd($_POST);
if(isset($_POST['currentpagePresence']) && $_POST['currentpagePresence'] != ''){
    $currentPagePresence = $_POST['currentpagePresence'];
   // dd($currentpagePresence);
}

$donneePresence = $_SESSION['donneepresences'];
$nbrp = count($donneePresence);
$nbrpage = ceil($nbrp / $itemparpage);

$presences = paginateTable($_SESSION['donneepresences'], $itemparpage, $currentPagePresence);


require_once views . '/presence.view.php';