<?php
$ref =[
   [
  'id' => 1,
  'libelle' => 'AWS',
  'status' => 'desactive',
  'id_promotion' => 1
  ],

  [
  'id' => 2,
  'libelle' => 'Dev Hackeuse',
  'status' => 'desactive',
  'id_promotion' => 1
  ],

  [
  'id' => 3,
  'libelle' => 'Dev Web/mobile',
  'status' => 'active',
  'id_promotion' => 1
  ],

  [
  'id' => 4,
  'libelle' => 'Referent Digital',
  'status' => 'desactive',
  'id_promotion' => 1
  ],

  [
  'id' => 5,
  'libelle' => 'Dev Data',
  'status' => 'desactive',
  'id_promotion' => 1
  ],

  [
  'id' => 6,
  'libelle' => 'Dev Web/mobile',
  'status' => 'active',
  'id_promotion' => 6
  ],

  [
  'id' => 7,
  'libelle' => 'Dev Data',
  'status' => 'active',
  'id_promotion' => 6
  ],

  [
  'id' => 8,
  'libelle' => 'Referent Digital',
  'status' => 'active',
  'id_promotion' => 6
  ],

  [
  'id' => 9,
  'libelle' => 'AWS',
  'status' => 'active',
  'id_promotion' => 6
  ],

  [
  'id' => 10,
  'libelle' => 'Dev Hackeuse',
  'status' => 'active',
  'id_promotion' => 6
  ],

];

include models . '/ajouterreferentielleModel.php';
//dd($referentiels);

include views . '/ajouterreferentielle.view.php';
$_SESSION['page'] = 'referentielsController';