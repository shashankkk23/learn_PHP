<?php

class UserAuth
{
    function login($usertype)
    {
        echo "$usertype logged in successfully";
    }
}



class student extends UserAuth
{
function getName(){
    echo "Welcome shashank";
}
}

class Teacher extends UserAuth
{
function teachersSkill(){
    echo "DSA";
}
}
$s1 = new student();
$s1->login("student");
echo "<br>";
$s1->getName();

echo "<br>";

$t1 = new Teacher();
$t1->login("teaher");
echo "<br>";
$t1->teachersSkill();
?>