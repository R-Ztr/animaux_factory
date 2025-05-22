<?php

require_once 'Animal.php';

class Dog implements Animal {
    public function makeSound(): void {
        echo "Le chien aboie : Wouf!\n";
    }
}