<?php

class Ingredient{
    protected $name;
    protected $color;
    protected $quantity;

    public function __construct(string $name, $color, $quantity){
        $this->name = $name;
        $this->color = $color;
        $this->quantity = $quantity;
    }

    public function getPotionName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
    public function getQuantity(){
        return $this->quantity;
    }
}

