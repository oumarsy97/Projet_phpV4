<?php

include models . '/ajouterreferentielleModel.php';
$id_pro = isset($_SESSION['id_promo']) ? $_SESSION['id_promo'] : 0;
$refs = [];
if($id_pro!=0){
    $refs = ReferentielsbyIdpromo($id_pro);

}
include views . '/ajouterreferentielle.view.php';
