<?php
$i=1;

while($i<20){

    if($i%5==0 && $i%3==0){
        echo"fizz buzz";}
    else if($i%3==0 ){
        echo"fizz";
    }else if($i%5==0 ){
        echo"buzz";
    }else{
        echo"$i \n";
    }
    $i++;
}



?>