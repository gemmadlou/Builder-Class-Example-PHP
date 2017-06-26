<?php

include './vendor/autoload.php';

use BNC\Builder\UserBuilder;

$builder = new UserBuilder();

$builder->setName('Gemma');
$builder->setAge('29');

echo '<pre>';
print_r($builder->build());
echo '</pre>';
