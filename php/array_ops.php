<?php

/**
 * Operadores usados em arrays
 * 
 */

 $user = [
     'name' => 'Samuel',
     'age' => 22
 ];

 $company = [
     'companyName' => 'UFAL',
     'role' => 'Student'
 ];

$all = $user + $company;

 print_r($all);

 $user1 = [
    'name' => 'Samuel',
    'age' => 22
];

$user2 = [
    'name' => 'teste',
    'age' => 22
];

var_dump($user1 == $user2);

$user1 = [
    'name' => 'Samuel',
    'age' => 22
];

$user2 = [
    'name' => 'Samuel',
    'age' => 22
];

var_dump($user1 === $user2);
var_dump($user1 !== $user2);

$user1 = [
    'name' => 'Samuel',
    'age' => 22
];

$user2 = [
    'name' => 'teste',
    'age' => 22
];

var_dump($user1 != $user2);