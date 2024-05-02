<?php 
///user ki info browser me savekrne ke liye cookies use krte hai
// syntax // setcookie(name, value, path, expire, domain, secure, httponly)


// $fruit = "apple";
setcookie("fruit", "apple",time()+(8640));
if(isset($_COOKIE['fruit'])){
    echo "current cookie is ".$_COOKIE['fruit'];
}else{
    echo "no cookie set";
}
?>