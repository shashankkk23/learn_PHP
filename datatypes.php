<!-- datatypes -->
<!-- String- String is a sequence of characters, used to represent text data. The string type can contain any Unicode character (UTF-16). -->

<!-- integers are whole numbers and do not include decimals or fractions. -->

<!-- float is a floating point number and can be represented as either integer or decimal value. -->

<!-- boolean  b = true; // boolean type can be either true or false. -->

<!-- null  b = null; // null type represents a variable that has not been initialized yet. -->

<!-- arrays -- -->

<!-- arrays are used to store multiple values in one single variable. -->

 <!-- objects(class)  -->

<!-- recousre - special type of datatype to stpore connection  -->

<?php 

$name = "Shahsank Tiwari"; // String type
// echo var_dump($name);

$num = 45;// Integer Type
echo "<br>";
// echo var_dump($num);
echo "<br>";

$floatNum = 34.56;// Float Typeecho "<br>";
// echo var_dump($floatNum);

echo "<br>";

$bool = true;
// echo var_dump($bool);
echo "<br>";

$arr = ["one", "two" , 3 ];
// echo var_dump($arr);
echo "<br>";

$khaali = null; // Null Type
// echo var_dump($khaali);


//class
//  $user = new ClassName();

//  /resources
// ftp - file transfer protocol 
$connection = ftp_connect("127.0.0.1") or die("localthost not found");

echo var_dump($connection);

?>