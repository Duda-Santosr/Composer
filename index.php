<?php
require 'vendor/autoload.php';
// Autoload do composer

$faker = Faker\Factory::create('pt-br');
// Criando um gerador de dados

echo "Nome: " .$faker->name() . "<br> <br>",
                $faker->email() . "<br> <br>",
                $faker->address() . "<br> <br>";
?>