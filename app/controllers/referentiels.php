<?php
include  models . '/referentielsModel.php';
$referentiels = referentielsPromotionActive();
//dd($referentiels);
//dd($_POST);
if(isset($_POST['newreferentiel']) && $_POST['newreferentiel'] !=''){
   // dd($_POST);
    $libelle = $_POST['libelle'];
    $status = 'active';
    $id_promotion = $_SESSION['id_promotion'];
    $refs = loadFile(referentiels);
    $newref = [
        'id' => count($refs) + 1,
        'libelle' => $libelle,
        'status' => $status,
        'id_promotion' => $id_promotion
    ];
    $ref = [
        'libelle' => $libelle,
        'status' => $status
    ];
    ajouterReferentiel($newref, referentiels);
    ajouterReferentiel($ref, listereferentiels);
    $referentiels = referentielsPromotionActive();
}
include  views . '/referentiels.view.php';