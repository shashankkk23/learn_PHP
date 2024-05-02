<?php
class MathOperation
{
    public $val = 65;
    function sum()
    {
        echo 10 + 20 + $this->val;
    }
    function multiply()
    {
        echo 20 * 30 + $this->val;
    }
}
$math = new Mathoperation();
$math->sum();
echo "<br>";
$math->multiply();
?>