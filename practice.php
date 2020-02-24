<?php


    function getCircleArea($radius){
    return $radius*2;
    }
    $circleArea = getCircleArea(1);
          echo $circleArea;
    
    
    
    
    function f($num1,$num2){
    echo $num1*$num2;
    }
    f(2,2);



    
    function printSum($a,$b){
    echo $a+$b;
    }
    printSum(1,2);



    
    function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
         //$max_number=$a;
         if ($a > $max_number){
             $max_number = $a;
         }
    }
    return $max_number;
     }
     $arr=[2,6,4,8,1];
     echo max_array($arr);
 



    function sum($arr){
    $num = 1;
    foreach($arr as $a){
        $num *= $a;
        
    } 
    //var_dump($arr);
    echo $num;

    }

    $test=[1,3,5,7,9];
    sum($test);



?>