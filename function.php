<?php

//we can call function above functiuon declaration
// test()
// function dets(){
//     echo "<h1>user details</h1>";
// }
// function test(){
//     dets();
//     echo "name shashank";
//     echo "<br>";
//     echo "age is 23";
//     echo "<br>";
// echo "<hr>";
// }
// test();
// test();


//parameterized function

// function add($a, $b){
//   echo $a+$b;
// }
// add(45,54)


function dets($name, $color){
  echo "<h4 style='color:$color' >$name</h4>" ;
}
dets("shashank", "yellow");
dets("Gaurav", "green");

?>