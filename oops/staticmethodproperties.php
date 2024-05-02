<?php  
// we can call class's method without creating class's object  with static keyword 

//3 jab bhi ek method ya property baar baar use ho rhi hai tab ham static keyword use krte hai


class Honda{
    static protected $carName= "Honda City";
    static function companyName(){
        echo  "Honda";
        echo "<br>";
    echo Honda::$carName;

}


}
// echo Honda::$carName;
echo "<br>";
Honda::companyName();
?>