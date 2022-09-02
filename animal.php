<?php

class Animal{
    public $cry = "bowbow!" ;
    function bow(){
        echo $this->cry . PHP_EOL;
    }
}

$animal_1 = new Animal();
$animal_1 -> bow();

class cat extends Animal{
    public $cry = "にゃー";
}
class dog extends Animal{
    public $cry = "ワンワン！";
}

$animal_1 = new cat();
$animal_1 -> bow();
$animal_1 = new dog();
$animal_1 -> bow();