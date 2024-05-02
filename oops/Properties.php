<?php  
class Properties{
    //Public, Private, Protected
    public $name = "shashankTiwari";
    function getName(){
        $occupation = "web Developer";
        echo "this is $this->name and i am a $occupation";
    }
 function updateName(){
    $this->name = "Shashank Tiwari";
 }
}
$p1 = new Properties();
$p1->updateName();
$p1->getName();
?>