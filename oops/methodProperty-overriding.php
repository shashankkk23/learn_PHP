<?php
// child class has the same method or property name as the parent 

// But child class has different implementation od methods or properties 


class Teachers
{
    public $city = "delhi";
    function nextExam()
    {
        echo "next Exam is maths";
    }
    function age()
    {
        echo "age is 40";
    }

}

class Students extends Teachers
{
    public $city = "Mumbai";
function age(){
    echo "age is 18";
}
}

$t1 = new Teachers();
// $t1->nextExam();
$s1 = new Students();
$s1->nextExam();
echo "<br>";
$s1->age();
echo "<br>";
echo $s1->city;

?>