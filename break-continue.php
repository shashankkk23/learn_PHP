<!-- code ki execution ko stop krne ke liye break statement use krte hai -->

<?php
//break

for ($i= 1; $i <= 11; $i++){
    echo $i;
    echo "<br>";
    if($i == 5){
        break;
    }
}

echo  "<hr>";

//continue
// bin aif condition ke continue lgaa dene se kuch bhi print nhi hoga kyuki loop har baar skip ho jayega
//jiss code ko skip krna hai usi ke upar lgaao condition
for($i =1; $i <= 20; $i++){
    if($i == 15){
     continue;
    }
    echo $i."<br>";
}

?>