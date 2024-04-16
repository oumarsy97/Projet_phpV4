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
    
    
    $etat = 0;
    $referentiels = referentielsPromotionActive();
    foreach($referentiels as $referentiel){
        if($referentiel['libelle'] == $libelle){
            $etat = 1;
            break;
        }
    }


    if($etat == 1){
        echo '<script type="text/javascript">alert("Ce referentiel existe déja");</script>';
    } else {
       

   

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_name = $libelle . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
        $image_path = imgs . $image_name;
        move_uploaded_file($image_tmp, $image_path);
    }
    $refs= loadFile(referentiels);
    $newref = [
        'id' => count($refs) + 1,
        'libelle' => $libelle,
        'status' => $status,
        'id_promotion' => $id_promotion,
        'image_path' => isset($image_path) ? $image_name : 'classe.jpg'
    ];
    ajouterReferentiel($newref, referentiels);
    $referentiels = referentielsActives();
    
}

           
}

include  views . '/referentiels.view.php';