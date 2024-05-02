<?php  

// late static binding - ke help se ham log static method ko inherit kar sakte hai

// latestatic binding me jiska object bnega usi ka output aayega

//lateStaticBinding ki help se current class ki jiska bhi object ban rha hai uske static method or properties ko call krr sakte hai inherted class ke andar jab method ya properties ka naam same hota hai tab




class CountrySale{
    static public $totalSale = 1000;
    function gettotalSale(){
        echo static::$totalSale; //this is latestatic binding
          }

          static function areaName(){
            echo "Mumbai India";
          }

          function getCurrentArea(){
            echo  static::areaName(); //lateStaticBinding
          }

}
class CitySale extends CountrySale{
    static public $totalSale = 500;
//     function gettotalSale(){
//   echo self::$totalSale;
//     }

static function areaName(){
    echo "Noida India";
  }

}
$ch = new CitySale();

// echo CitySale::$totalSale;
$ch->gettotalSale();
$ch->getCurrentArea();
?>