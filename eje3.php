<?php

interface Animal {
    public function getName();
    public function getOwnerName();
}

class Dog implements Animal
{
    public $name;
    public $breed;
    public $weight;
    public $birthDate;
    public $ownerName;

    public function __construct($name, $breed, $weight, $birthDate, $ownerName)
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->weight = $weight;
        $this->birthDate = $birthDate;
        $this->ownerName = $ownerName;
    }

    public function getName() {
        return $this->name;
    }

    public function getOwnerName() {
        return $this->ownerName;
    }

    public function getInfo() {
        echo "The friendly dog is called " . $this->name . " , weights " . $this->weight . " , was born in " . $this->birthDate . " , and belongs to " . $this->ownerName . ".\n";
    }
}

$dog = new Dog("Coco", "Golden", " 20 kg ", " Abril 2021 ", " Mr. Carlos");
echo $dog->getInfo();