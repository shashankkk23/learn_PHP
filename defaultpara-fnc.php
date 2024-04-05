<?php 

// /default parameter fnc 

// function fruit($name,$color= " green"){
//     echo "fruit name is $name and color is $color";
// }
// fruit("bananan", "red");


function userinfo($name, $color = "red"){
    return "<h1 style='color:$color' > $name</h1>";
}
echo userinfo("shashank" );


//default fnc last se chalega jaise
//fnc name($name= 'shashank', $color= 'green') agar color ki value default nhi set hai to jo arguments pass hoga vo name me jayega pahle
?>