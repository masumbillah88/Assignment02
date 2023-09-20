<?php
    $firstNumber = 0;
    $secondNumber = 1;
    for($i = 0; $i <= 10; $i++){
        //First Calcaulation of fibonacci;
        $fibonnacci = $firstNumber+$secondNumber;
        //Updating the variables for next iteration.
        $firstNumber = $secondNumber;
         $secondNumber = $fibonnacci;
         //Checking if the fibonacci is greater than 100
       if($fibonnacci > 100){
        break;//if it is greater than 100 the break the loop;
       }
       echo $fibonnacci."\n";
       }
                       
        
        
         
         
    
    

?>