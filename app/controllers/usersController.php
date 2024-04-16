<?php

$users = [
    'admin' => [
        'username' => 'admin@orange.com',
        'password' => 'admin',
        'profil' => 'admin',
    ],
    'user' => [
        'username' => 'user@orange.com',
        'password' => 'passer',
        'profil' => 'user',
    ],
];

//savefile('../data/users.csv', $users);

function getUser($login, $password){
    $users = getData(users);
    foreach ($users as $user) {
        if ($user['username'] == $login && $user['password'] == $password) {
            return $user;
        }
    }
    return null;
}