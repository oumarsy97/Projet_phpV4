<?php

function recherche($tableau, $key, $value){
    $resultat = [];
    foreach($tableau as $item){
        if($item[$key] == $value){
            $resultat[] = $item;
        }
    }
    return !empty($resultat)? $resultat:$tableau;
}

function getData($fichier){
   $data = loadFile($fichier);
    return $data;
}

function promotionActive(){
    $fichier = '../data/promotion.csv';
    $promotions = getData($fichier);
    $promotionActive = [];
    foreach ($promotions as $promotion) {
        if ($promotion['statut'] == 'en cours') {
            $promotionActive = $promotion;
            break;
        }
    }
    return $promotionActive;
   }


   //les referentiels du promoActive
function referentielsPromotionActive(){
    $promotionActive = promotionActive();
    $fichier = '../data/referentiels.csv';
    $referentiels = getData($fichier);
    $referentielsPromotionActive = [];
    foreach ($referentiels as $referentiel) {
        if($referentiel['id_promotion'] == $promotionActive['id']){
            $referentielsPromotionActive[] = $referentiel;
        }
        
    }
    return $referentielsPromotionActive;
}

  //les referentiels Actives du promoActive
function referentielsActives(){     
    $data = referentielsPromotionActive();
foreach($data as $row){
    if( ($row['status'] == 'active')){
        $referentiels[] = $row;
    }
}

return $referentiels;
}

//pagination
function paginateTable($array, $pageSize, $currentPage) {
    $totalItems = count($array);
    $totalPages = ceil($totalItems / $pageSize);
    $startIndex = ($currentPage - 1) * $pageSize;

    $pagedArray = array_slice($array, $startIndex, $pageSize);

    return  !empty($pagedArray) ?$pagedArray: $array;
        
}
