<?php 
//jab hame function ko conditionaly call krna ho tab ham nested fnc use krte hai
function nest(){
    echo 'parent function called <br>';
    function child(){
        echo "child fnc called";
    }

    
}
//nested fnc tabhi chalega jab uska parent fnc call ho chuka hoga
nest(); // agar parent fnc calle nhi klrenge to child fnc bhi call nhi hoga
child();
?>