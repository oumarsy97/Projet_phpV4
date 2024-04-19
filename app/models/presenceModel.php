<?php
$data = [
    [
        'id' => 1,
        'matricule' => 'PK_DEVDAT_2024_137',
        'name' => 'Diagne',
        'username' => 'Mouhamadou Moustapha',
        'telephone' => '785953562',
        'Referentiel' => 'Dev Data',
        'date' => '11-04-2024',
        'heureArrive' => '10:48',
        'status' => 'present',
    ],
    [
        'id' => 2,
        'matricule' => 'PK_DEVDAT_2024_138',
        'name' => 'Diop',
        'username' => 'Aly',
        'telephone' => '784531234',
        'Referentiel' => 'Dev Web/mobile',
        'date' => '11-04-2024',
        'heureArrive' => '07:48',
        'status' => 'present',
    ],
    [   
        'id' => 3,
        'matricule' => 'PK_DEVDAT_2024_111',
        'name' => 'Fall',
        'username' => 'Fatou',
        'telephone' => '764339876',
        'Referentiel' => 'Dev Web/mobile',
        'date' => '11-04-2024',
        'heureArrive' => '08:00',
        'status' => 'present',
    ]
    
    ];
    // savefile(presences, $data);
$promotion = promotionActive();
//dd($promotion);


//dd($presence);

function allpresencePromotionActive(){
    $referentielsPromotionActive = referentielsActives();
   // dd($referentielsPromotionActive);
    $presences = getdata(presences);
   
    
    $filtered = [];
    foreach($referentielsPromotionActive as $referentiel){
        foreach($presences as $presence){
            if($presence['id_referentiel'] == $referentiel['id']){
                $filtered[] = $presence;
            }
        }
    
    }
    //dd($filtered);
    return $filtered;
}

function getlibelle($idreferentiel){
    $referentiels = referentielsPromotionActive();
    foreach($referentiels as $referentiel){
        if($referentiel['id'] == $idreferentiel){
            return $referentiel['libelle'];
        }
    }

}

function presenceAtDate($date){
    $presences = allpresencePromotionActive();
    $filtered = [];
    foreach($presences as $presence){
        if($presence['date'] == $date){
            $filtered[] = $presence;
        }
    }
    return $filtered;
}

function filter_presence($status, $referentiel,$date) {
   $allpresence = presenceAtDate($date);
    $filtered = [];
    if($status == 'status' && $referentiel == 'referentiel'){
        return $allpresence;
    }
    if($status == 'status' && $referentiel != 'referentiel'){
        foreach ($allpresence as $presence) {
            if ($presence['id_referentiel'] == $referentiel) {
                $filtered[] = $presence;
            }
        }
        return $filtered;
    }
    if($status != 'status' && $referentiel == 'referentiel'){
        foreach ($allpresence as $presence) {
            if ($presence['status'] == $status) {
                $filtered[] = $presence;
            }
        }
        return $filtered;
    }
    if($status != 'status' && $referentiel != 'referentiel'){
        foreach ($allpresence as $presence) {
            if ($presence['status'] == $status && $presence['id_referentiel'] == $referentiel) {
                $filtered[] = $presence;
            }
        }
        return $filtered;
    }
    
    
}

