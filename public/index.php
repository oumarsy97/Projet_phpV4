
<?php


$pages = [
    'dashboard' => 'dashboard.php',
    'promotion' => 'promotion.php',
    'nouveaupromo' => 'nouveaupromo.php',
    'referentiels' => 'referentiels.php',
    'ajouterreferentielle' => 'ajouterreferentielle.php',
    'utilisateurs' => 'utilisateurs.php',
    'presence' => 'presence.php',
    'ajouterreferentielle' => 'ajouterreferentielle.php',
    'search' => 'search.php',
];
include '../app/config/helpers.php';
include data . '/file.php';
include models . '/models.php';
include config . '/validator.php';
// if(!isset($_SESSION['user'])){
//     include routes .'/routesconnexion.php';
// }else{
    include routes .'/routes.php';
// }


?>
