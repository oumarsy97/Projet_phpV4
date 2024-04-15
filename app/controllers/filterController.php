<?php
 $presences = filter_presence($_POST['statut'],$_POST['referentiel'],$_POST['datechoice']); 
 $_SESSION['presences'] = $presences;
 $_SESSION['statut'] = $_POST['statut'];
 $_SESSION['referentiel'] = $_POST['referentiel'];
 include controllers . '/presenceController.php'; 
 $_SESSION['page'] = 'presenceController';