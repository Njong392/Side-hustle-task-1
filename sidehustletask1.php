<?php

function sum($numbers){
   $sum = 0;
   $numcount = count($numbers);
   for($i=0;$i<$numcount;$i++){
     $sum = $sum + $numbers[$i];
   }

    return $sum;
}


function func($start, $end){
     $arr = [];
     for($i=$start;$i<=$end;$i++){
       array_push($arr, $start);
       var_dump($arr);
     }

}


 ?>
