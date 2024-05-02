<?php  

// abstarct class is a template that defines method for a child classes(konse konse methods hame mandatory bnaane hote hai child class me)
//
// in abstract class we declare methods but write implementation in child class 

//we delcare abstract method in abstract class and implement that same method in child class/inherited Class

//abstract class hamesha inheritance ke andar hi kaam krti hai


// #abstract clkass ka object nhiii bnaa sakte uski child class ka hi object bntaa hai

//abstract method ke parameter bhi sdame honge child class me

abstract class Car{
    abstract function makeEngine(); 
    abstract function makeGearBox(); 
}

class HondaCity extends Car{
    function makeEngine(){
echo "engineReady";
    }
    function makeGearBox(){
  echo "GearReady";
    }
}

$hondaCity = new HondaCity();
$hondaCity->makeEngine();
echo "<br>";
$hondaCity->makeGearBox();



?>