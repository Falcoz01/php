<?php

$prenom="mohamed";
$nom="Dfdk";
$age=8;

if($prenom=="Paul"){
    echo"Bonjour je suis Paul";
}
echo"\n";
if($prenom!="Paul" && $age=25){
    echo"Bonjour je suis Paul et j'ai 25ans";
}
echo"\n";
if($prenom!="Paul" && $nom!="Dupond"){
    echo"je suis $prenom $nom";
}
echo"\n";
if($prenom!="Paul" && $nom!="Dupond" && $age>18){
    echo"Bonjour j'ai moins de 18ans";
}

?>