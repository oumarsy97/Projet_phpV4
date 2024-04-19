<?php
function ajouterPromotion($newpromo, $file){
    $referentiels = array_map('str_getcsv', file($file));
    $referentiels[] = $newpromo;
    // Enregistrer les modifications dans le fichier CSV
    $fp = fopen($file, 'w');
    foreach ($referentiels as $ref) {
        fputcsv($fp, $ref);
    }
    fclose($fp);

}