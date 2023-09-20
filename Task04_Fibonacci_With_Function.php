<?php
    function getFibonacci($firstNumber,$secondNumber,$limit){
        for($i=$firstNumber;$i <= $limit; $i++){
            //Finding the next Fibonacci;
            $NextFibonacci = $firstNumber+$secondNumber;
            //updating the variables;
            $firstNumber = $secondNumber;
            $secondNumber = $NextFibonacci;
            //Printing the output of Fibonacci;
            echo $NextFibonacci."\n";
        }

    }
    getFibonacci(0,1,15);

?>