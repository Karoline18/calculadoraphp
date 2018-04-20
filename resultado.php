<?php

function valida($num1, $num2){
    return is_numeric($num1) && is_numeric($num2);
}

function multiplica ($num1, $num2){
    return $num1*$num2;
}

function subtrai ($num1, $num2){
    return $num1-$num2;
}

function dividi ($num1, $num2){
    return $num1/$num2;
}
 
function soma ($num1, $num2){
    return $num1+ $num2;
}
  
if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["opera"])){

    
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $opera=$_POST["opera"];
    $erro= "Número Inválido";
    
    if(valida($num1, $num2)){
        if($opera=='soma'){
            $resultado= soma($num1, $num2);
        }
        if($opera=='multiplica'){
            $resultado= multiplica($num1, $num2);
        }
        if($opera=='dividi'){
            $resultado= dividi($num1, $num2);
        }
        if($opera=='subtrai'){
            $resultado= subtrai($num1, $num2);
        }
    }else{
         echo "<table id='erro'><tr><td>$erro</td></tr></table>";
    }
}