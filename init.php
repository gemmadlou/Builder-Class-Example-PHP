<?php

include './vendor/autoload.php';

use BNC\Builder\UserBuilder;
use BNC\Builder\User;

$builder = new UserBuilder();
$builder->setName('Gemma');
$builder->setAge('29');
$user = $builder->build();

function example(User $user)
{
    echo "\n\r";
    print_r($user->name());

    echo "\n\r";
    print_r($user->age());

    echo "\n\r";
    echo "\n\r";
}

example($user);
