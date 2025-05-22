<?php

require_once 'Animal.php';

class Cat implements Animal {
    public function makeSound(): void {
        echo "Le chat miaule : Miaou!\n";
    }
}