<?php 

require_once 'CatFactory.php';
require_once 'DogFactory.php';

function testAnimalFactory(AnimalFactory $factory) {
    $animal = $factory->createAnimal();
    $animal->makeSound();
}

echo "Test du chat :\n";
testAnimalFactory(new CatFactory());

echo "\nTest du chien :\n";
testAnimalFactory(new DogFactory());