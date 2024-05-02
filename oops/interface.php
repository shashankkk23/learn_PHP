<?php  

// interface hame btata hai ek class ke andar kon konse method implement krna hai

// interfacer ke andar ham properties nhi uis ekrr sakte 
// abstract ke andar properties use krr sakte hai

//all methods in interface must be public, While abstract class method are public and protected it acnt be private

// all methods in interface are abstract so they cannot implemented in code and the abstract keyword is not necessary 




interface ProductFeatures {
    function images();
    function ownerDetails();
}

class Products implements ProductFeatures{
function images(){
    echo "product images";
}
function ownerDetails(){
    echo "owner details";
}
}

$obj1 = new Products();
$obj1->images();
$obj1->ownerDetails();


?>