<!DOCTYPE html>
<body>
<?php

require_once "Ingredient.php";

class Potion{
    private $name=array();
    public $ingredients=array();

    public function __construct(string $name){
        $this->name[] = $name;
    }
        public function addIngredient(string $name, string $color, string $quantity){
        $this->ingredients[] = new Ingredient($name, $color, $quantity);
    }
    public function getName(){
        return $this->name;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
}

//Concoct potion
$fire = new Potion("Liquid Fire:");
$fire->addIngredient("Teaspoon of Alcohol:", "Clear", "3");
$fire->addIngredient("Dragon Scale:", "Red", "4");



echo "<pre>";
var_dump($fire->getIngredients());





