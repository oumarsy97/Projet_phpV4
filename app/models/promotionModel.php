<?php

$pro = [
    [
    'libelle' => 'Promotion 1',
    'dateDebut' => '2018-01-01',
    'dateFin' => '2018-11-01',
    'statut' => 'inactive',
    'id' => '1'],
    [
    'libelle' => 'Promotion 2',
    'dateDebut' => '2019-01-01',
    'dateFin' => '2019-11-01',
    'statut' => 'inactive',
    'id' => '2'],
    [
    'libelle' => 'Promotion 3',
    'dateDebut' => '2020-01-01',
    'dateFin' => '2020-11-01',
    'statut' => 'inactive',
    'id' => '3'],
    [
    'libelle' => 'Promotion 4',
    'dateDebut' => '2021-01-01',
    'dateFin' => '2021-11-01',
    'statut' => 'inactive',
    'id' => '4'],
    [
    'libelle' => 'Promotion 5',
    'dateDebut' => '2022-01-01',
    'dateFin' => '2022-11-01',
    'statut' => 'inactive',
    'id' => '5'],
    [
    'libelle' => 'Promotion 6',
    'dateDebut' => '2023-01-01',
    'dateFin' => '2023-11-01',
    'statut' => 'en cours',
    'id' => '6'],
    ];
   // $fichier = data . '/promotion.csv';
   //savefile('../data/promotion.csv', $pro);
    $promotions = loadFile(promotion);
    //inverser le tableau
    $promotions = array_reverse($promotions);
   

    function promotionCheck($idPromoActive, $idPromoInactive){
        $promos = array_map('str_getcsv', file(promotion));
    
        // Désactiver la promotion active
        foreach($promos as $key => $promo){
            if($promo[4] == $idPromoActive){
                $promos[$key][3] = 'desactive';
            }
            if($promo[4] == $idPromoInactive){
                $promos[$key][3] = 'en cours';
            }
        }
    
       
        // Enregistrer les modifications dans le fichier CSV
        $fp = fopen(promotion, 'w');
        foreach ($promos as $promo) {
            fputcsv($fp, $promo);
        }
        fclose($fp);
        //return $promos;
    }
        
    


