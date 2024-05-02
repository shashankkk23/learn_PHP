<?php
// Access Modifies/Specifiers

// Access zone 
// 1- access inside the current class only
// 2- access EveryWhere 
// 3- Access in inherited class 

// type of Access Modifiers/Speccifiers 
// 1- public - access everywhere
// 2- private - Access inside the current class only
// 3- protected - Access in current class and inherited class




// ++++++++++++Code---------------------------

class Teachers
{
    private function QuestionPaper()
    {
        return "Important";
    }

    function exam()
    {
        if ($this->QuestionPaper() == "Important") {
            echo "get Permission first";
        } else {
            echo "do else";
        }
    }
       protected function studentMarks()
        {
            echo "All students Marks";
        }


    }
class Management extends Teachers{
function reveiewExams(){
    $this->studentMarks();
}
}

$t1 = new Teachers();
$m1 = new Management();
// $t1->QuestionPaper();
echo $t1->exam();
$m1->reveiewExams();


















?>