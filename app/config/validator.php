<?php
function validateEmail($email){
    $pattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    return preg_match($pattern, $email);
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