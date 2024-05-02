<?php  
class Constructordemo{
    public $name;
function __construct($name){
   $this->name = $name;
}
function displayName(){
    echo $this->name;
}
}
$p1= new Constructordemo("gauravtiwari");
// $p1->getName();
$p1->displayName();
?>