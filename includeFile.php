<?php 
// include - 
// include_once -
// required -
// required_once -


//#include and include_once
//it will give WARNING and we can hide WARNING in production
// include("./start.php");
// for($i = 1; $i <= 10; $i++){
//      include_once("./start.php"); //this will not load 10 times
// }


// require and require_once 
//it will give FATAL error #we cannot hide FATAL error in production

require("./start.php");


?>