<?php   
// Traits 
// trait is a mechanism to resuse code in single inheritance language

// PHP is a single inheritance language 

// we can use many traits in class


// ex agar  2 parent class hai use ham ek single child class ke andar nhi inherit krr sakte aisa krne ke liye ham trait use krte hai 




trait parentCompany1{
    function getTotalEmployee(){
echo 500;
    }
}

trait parentCompany2{
    function getOffice(){
        echo "800";
    }
}


class Company{
use parentCompany1;
use parentCompany2;
}

$cmp = new Company();
$cmp->getTotalEmployee;
$cmp->getEmployee;



?>