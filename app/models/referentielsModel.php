<?php


 function ajouterReferentiel($newref){
    $referentiels = array_map('str_getcsv', file(referentiels));
    $referentiels[] = $newref;
    // Enregistrer les modifications dans le fichier CSV
    $fp = fopen(referentiels, 'w');
    foreach ($referentiels as $ref) {
        fputcsv($fp, $ref);
    }
    fclose($fp);
    //return $promos;
}
