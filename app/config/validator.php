<?php
function validateEmail($email){
    return  filter_var($email, FILTER_VALIDATE_EMAIL);
}


function validatePassword($password){
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    return preg_match($pattern, $password);
}

function validateTelephone($telephone){
    $pattern = "/^[0-9]{10}$/";
    return preg_match($pattern, $telephone);
}

function validateDate($date){
    $pattern = "/^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}$/";
    return preg_match($pattern, $date);
}

function validateLibelle($libelle){
    $pattern = "/^[a-zA-Z0-9 ]+$/";
    return preg_match($pattern, $libelle);
}

function validateEntreDate($date1, $date2){
    //minimum 4 mois
    $date1 = date_create($date1);
    $date2 = date_create($date2);
    $interval = date_diff($date1, $date2);
    return $interval->m >= 4;
    
}