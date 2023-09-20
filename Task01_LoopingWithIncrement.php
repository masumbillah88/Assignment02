<?php
//Finding Even Numbers With for loop;
function getEvenNumber($startNumber,$endNumber,$step){
    for($i = $startNumber; $i <= $endNumber; $i += $step){
        
        if($i%2!=0){
            echo ($i+1)."<br>";
        }
        
    }
}
echo getEvenNumber(1,20,2);
echo "<br>";
echo "<h1>Printing Even Numbers with While Loop:</h1>";

//With while loop;
function getEvenNumberWhileLoop($startNumber,$endNumber,$step){
    $i = $startNumber;
    while($i <=$endNumber){
        if($i%2 != 0){
            echo ($i+1)."<br>";
        }
        $i+=$step;
    }
}
echo getEvenNumberWhileLoop(1,20,2);
echo "<br>";
echo "<h1>Printing Even Numbers with Do While Loop:</h1>";
//Finding Even Numbers with Do While Loop;
function getEvenNumberDoWhile($startNumber,$endNumber,$step){
$i = $startNumber;
do{
    if($i%2!=0){
        echo ($i+1)."<br>";
    }
    $i+=$step;
}while($i <= $endNumber);

}
getEvenNumberDoWhile(1,20,2);

?>