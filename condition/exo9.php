<?php
$nom="thomas";

if($nom=="Paul"){
    echo"Bonjour je suis Paul";
}else if($nom=="Marc"){
    echo"Je ne suis pas Paul,je suis Marc";
}else{
    echo"Je suis $nom";
}

switch ($nom){
    case 'Paul': echo 'Bonjour je suis Paul';
    break;
    case 'Marc': echo 'Je ne suis pas Paul,je suis Marc';
    break;
    default: echo "Je suis $nom";
   }
   