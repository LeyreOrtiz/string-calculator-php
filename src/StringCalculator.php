<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add (string $numbers): int
    {
        if(empty($numbers)){
            return 0;
        }
        $numbersArray = explode(",", $numbers);
        if(count($numbersArray) > 1){
            return $numbersArray[0];
        }


    }

}