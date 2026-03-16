<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    public function add (string $numbers): int
    {
        if(empty($numbers)){
            return 0;
        }
        else if($numbers == "1"){
            return 1;
        }


    }

}