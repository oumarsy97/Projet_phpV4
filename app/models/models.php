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

function insertData($fichier, $data){
    $fp = fopen($fichier, 'a'); // Ouvre le fichier en mode append (ajout à la fin du fichier)
    fputcsv($fp, $data); // Écrit les valeurs dans le fichier CSV
    fclose($fp); // Ferme le fichier
    // $data = array_merge(loadFile($fichier), $data);
    // savefile($fichier, $data);
}

function referentielsPromotionActive(){
    $id_promotionActive = $_SESSION['id_promotion'];

    $referentiels = getData(referentiels);
     $referentielsPromotionActive = [];
     foreach ($referentiels as $referentiel) {
         if($referentiel['id_promotion'] == $id_promotionActive){
             $referentielsPromotionActive[] = $referentiel;
         }
         
     }
     return $referentielsPromotionActive;
 }

 function referentielsActives(){
    $referentiels = referentielsPromotionActive();
    $referentielsActives = [];
    foreach ($referentiels as $referentiel) {
        if($referentiel['status'] == 'active'){
            $referentielsActives[] = $referentiel;
        }
        
    }
    return $referentielsActives;
 }

function insertDataA($referentiels, $values) {
    $file = 'votre_fichier.csv';
    
    $fp = fopen($file, 'a'); // Ouvre le fichier en mode append (ajout à la fin du fichier)
    
    fputcsv($fp, $values); // Écrit les valeurs dans le fichier CSV
    
    fclose($fp); // Ferme le fichier
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



//pagination
function paginateTable($array, $pageSize, $currentPage) {
    $totalItems = count($array);
    $totalPages = ceil($totalItems / $pageSize);
    $startIndex = ($currentPage - 1) * $pageSize;

    $pagedArray = array_slice($array, $startIndex, $pageSize);

    return  !empty($pagedArray) ?$pagedArray: $array;
        
}

function ReferentielsbyIdpromo($id_promotion){
    $referentiels = getData(referentiels);
    $referentielsbyIdpromo = [];
    foreach ($referentiels as $referentiel) {
        if($referentiel['id_promotion'] == $id_promotion){
            $referentielsbyIdpromo[] = $referentiel;
        }
        
    }
    return $referentielsbyIdpromo;
}

function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($password1, $password2) {
    return password_verify($password1, $password2);
}

function getUser($login, $password){
    $users = getData(users);
    foreach ($users as $user) {
        if ($user['username'] == $login && verifyPassword($password, $user['password'])) {
            return $user;
        }
    }
    return null;
}