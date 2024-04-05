<?php 
//local and global variables

 $name = "shashank";
//  function user(){
//     global $name; //we have to define keyword for global variable use inside function;
//     //$name = "gaurav";//we can also change global variables value in function
//     echo "localvariable $name<br> ";
//  }
//  user();
//  echo "global variable $name <br>";



function outer(){
    $name = "gaurav";
    echo $name;
    echo "<br>";
function inner(){
  $name = "tiwari";
  echo $name;
  echo "<br>";
}
}
outer();
inner();
echo $name
?>