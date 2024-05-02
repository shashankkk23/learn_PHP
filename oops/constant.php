<?php 
class ConstantDemo{
// private const collegeName = "viva college";
protected const collegeName = "viva college";
function getCollegeName(){
    echo self::collegeName;
    // echo ConstantDemo::collegeName; //second type how to call constant

}
}
class Child extends ConstantDemo{
 function getConst(){
    echo self::collegeName;
 }
}

// echo ConstantDemo:: collegeName;
$c1 = new ConstantDemo();
$c1->getCollegeName();

$ch1 = new Child();
echo "<br>";
$ch1->getConst();
?>