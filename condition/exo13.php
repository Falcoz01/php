<?php
$phrase = 'Inmensae subtilitatis, toto et malesgfhdjkhfgdjuada fames.';
$toto= "toto";

$pos1=stripos($phrase,$toto);

if($pos1== false ){
    echo"toto n'a pas été trouver";
}else{
    echo"toto a été trouver";
}

echo"\n";

echo"\n";
for($i=0 ; $i<strlen($phrase) ; $i++){

    echo $phrase[$i];
}

