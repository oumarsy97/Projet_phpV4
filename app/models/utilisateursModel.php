<?php

// $users = [
//     [
//         'matricule' => 'PK_DEVDAT_2024_137',
//         'name' => 'Diagne',
//         'username' => 'Mouhamadou Moustapha',
//         'email' => 'mouhamadoutapha@orange.com',
//         'genre' => 'M',
//         'telephone' => '785953562',
//         'id_referentiel' => 7
//     ],
//     [
//         'matricule' => 'PK_DEVWEB_2024_138',
//         'name' => 'Diop',
//         'username' => 'Aly',
//         'email' => 'alydiop05@orange.com',
//         'genre' => 'M',
//         'telephone' => '784531234',
//         'id_referentiel' => 6
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_140',
//         'name' => 'Seck',
//         'username' => 'Aby',
//         'email' => 'abyseck32@orange.com',
//         'genre' => 'F',
//         'telephone' => '785953562',
//         'id_referentiel' => 7
//     ],
//     [
//         'matricule' => 'PK_DEVWEB_2024_132',
//         'name' => 'Ndiaye',
//         'username' => 'Modou',
//         'email' => 'modoundiaye21@orange.com',
//         'genre' => 'M',
//         'telephone' => '784531234',
//         'id_referentiel' => 6
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_121',
//         'name' => 'Sarr',
//         'username' => 'Ousmane',
//         'email' => 'ousmanesarr1@orange.com',
//         'genre' => 'M',
//         'telephone' => '775953562',
//         'id_referentiel' => 7
//     ],
//     [
//         'matricule' => 'PK_DEVWEB_2024_111',
//         'name' => 'Fall',
//         'username' => 'Fatou',
//         'email' => 'fatoufall@orange.com',
//         'genre' => 'F',
//         'telephone' => '764339876',
//         'id_referentiel' => 6
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_157',
//         'name' => 'Mabye',
//         'username' => 'Daouda',
//         'email' => 'daoudamabye98@orange.com',
//         'genre' => 'M',
//         'telephone' => '765953562',
//         'id_referentiel' => 7
//     ],
//     [
//         'matricule' => 'PK_DEVWEB_2024_167',
//         'name' => 'Thiam',
//         'username' => 'Codou',
//         'email' => 'codouthiam43@orange.com',
//         'genre' => 'F',
//         'telephone' => '784531234',
//         'id_referentiel' => 6
//     ],
// ];
//savefile($fichier, $users);


$promotionActive = promotionActive();
$referentiels = referentielsActives();


function listeApprenants($id_referentiel){
    $fichier = '../data/utilisateurs.csv';
    $users = getData($fichier);
    $apprenants = [];
    foreach ($users as $user) {
        if ($user['id_referentiel'] == $id_referentiel) {
            $apprenants[] = $user;
        }
    }
    return $apprenants;
   }

function seachUser($users,$name){
    $apprenants = [];
    foreach ($users as $user) {
        if ($user['name'] == $name) {
            $apprenants[] = $user;
        }
    }
    return !empty($apprenants) ? $apprenants: $users;
   }

























// $presences = [
        
//     [
//         'matricule' => 'PK_REFDIG_2024_131',
//         'nom' => 'DIAGNE',
//         'prenoms' => 'ASSANE',
//         'Telephone' => '772908738',
//         'Referentiel' => 'Referent Digital',
//         'heureArrive' => '10:48',
//         'status' => 'present'
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_133',
//         'nom' => 'SONTEZE',
//         'prenoms' => 'Isaga',
//         'Telephone' => '772209700',
//         'Referentiel' => 'Developpement Data',
//         'heureArrive' => '',
//         'status' => 'absent'
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_135',
//         'nom' => 'Diop',
//         'prenoms' => 'Fallou',
//         'Telephone' => '772204700',
//         'Referentiel' => 'Developpement Web',
//         'heureArrive' => '',
//         'status' => 'absent'
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_136',
//         'nom' => 'Thiaw',
//         'prenoms' => 'Zahra',
//         'Telephone' => '785953562',
//         'Referentiel' => 'Developpement Data',
//         'heureArrive' => '09:10',
//         'status' => 'present'
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_137',
//         'nom' => 'Diagne',
//         'prenoms' => 'Modou ',
//         'Telephone' => '785953562',
//         'Referentiel' => 'Referent Digital',
//         'heureArrive' => '07:00',
//         'status' => 'present'
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_138',
//         'nom' => 'Ndiaye',
//         'prenoms' => 'marieme ',
//         'Telephone' => '785953562',
//         'Referentiel' => 'Developpement Web',
//         'heureArrive' => '08:10',
//         'status' => 'present'
//     ],
//     [
//         'matricule' => 'PK_DEVDAT_2024_145',
//         'nom' => 'Diop',
//         'prenoms' => 'Khaly ',
//         'Telephone' => '785953562',
//         'Referentiel' => 'Developpement Data',
//         'heureArrive' => '',
//         'status' => 'absent'
//     ]
// ];
 
// $fichier = '../data/presences.json';
// file_put_contents($fichier, json_encode($presences));




?>