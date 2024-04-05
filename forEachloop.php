<?php 
 $user = ["shashank", "gaurav","tiwari", "tiwariJII"];

 foreach($user as $x){
     echo $x."<br>";
     if($x === "gaurav"){
         break;
        }
 }

//second type of foreach
//  foreach($user as $y);
//     echo $y."<br>";
// endforeach
?>