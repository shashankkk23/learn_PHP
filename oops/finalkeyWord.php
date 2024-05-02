<?php 
// #we use final keyword to prevent inheritance 

// if we use final; keyword befopre declaring class then the class will not going to be inherit 






// final class Honda{

// }
// class Car extends Honda{

// }

// $car = new Car();




class Honda{
final function companyName(){
    echo "honda car";
}
}
class Car extends Honda{
    //  function companyName(){
    //     echo "City";
    //  }
}

$car = new Car();
$car->companyName();














?>