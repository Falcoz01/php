<?php
$a=rand(0,100);
$b=rand(0,100);
$c=rand(0,100);
echo"$a ,$b ,$c";

if($a<$b && $a<$c){
    echo"le plus petit nombre est a";
}else if($b<$a && $b<$c){
    echo"le plus petit nombre est b";
}else{
    echo"le plus petit nombre est c";
}

?>