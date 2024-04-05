<?php 
// $_REQUEST- is a super global variable
// super global variabke ko user define nhi krte ye already bane huye hite hai 

// $_REQUEST me get post dono data milenge 


// print_r($_REQUEST['password']);
//how to run loops in $_request

foreach($_REQUEST as $key => $data){
    echo $data;
    echo "<br>";
}
?>