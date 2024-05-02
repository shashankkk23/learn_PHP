<form action="" method="post">
    <input type="text" name="usernmame" placeholder="EnetrUsername">
    <br>
    <br>
    <button name="button" value="set">setCookies</button>
    <br>
    <br>
    <button name="button" value="display">display cookies</button>
    <br>
    <br>
    <button name="button" value="delete">delete cookies</button>
</form>

<?php 
if(isset($_POST['button'])){
if($_POST['button']== "set"){
$val = $_POST['username'];
echo $val;
setcookie("user",$val);
echo "cookie is set";
}
}
?>