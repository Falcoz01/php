<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<form action="exo20.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Entrer une lettre</label>
    <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lettre">
  </div>
  <button type="submit" class="btn btn-primary">Reponse</button>
</form>
<?php
$o = 0;
$tab = [
    "pomme",
    "abricot",
    "avocat",
    "banane",
    "poivron",
    "myrtille",
    "mure",
    "cassis",
    "pamplemousse",
    "melon",
    "cerise",
    "piment",
    "clementine",
    "canneberge",
    "concombre",
    "groseille",
    "prune",
    "date",
    "durian",
    "aubergine",
    "sureau",
    "feijoa",
    "figue",
    "goji",
    "raisin",
    "guava",
    "goyave",
    "jacquier",
    "kiwi",
    "citron",
    "litchi",
    "mandarine",
    "mangue",
    "nectarine",
    "noix",
    "olive",
    "orange",
    "papaye",
    "peche",
    "poire",
    "kaki",
    "ananas",
    "grenade",
    "coing",
    "raisin",
    "ramboutan",
    "framboise",
    "fraise",
    "tomate",
    "pasteque"
 ];

$nombre=rand(0,count($tab));

if($_POST['lettre']==""){
    echo "attention vous n'avez pas ecrit de lettre";
}

if (isset($_SESSION['mot'])) {
   }else{
    $_SESSION['mot'] = $tab[$nombre];
    $taillemot=strlen($_SESSION['mot']);
    $tom="";
    $_SESSION['ui']='';
for($i=0 ; $i<$taillemot ; $i++){
     $tom=$tom.'_';

}
    $_SESSION['tom'] = $tom;
}

echo"<br>";
$verife=str_contains($_SESSION['mot'],  $_POST["lettre"]);
$pos = strpos($_SESSION['mot'], $_POST['lettre']);
echo"<br>";

if($verife==true && $_POST['lettre']!=""){
    echo"<br>";
    echo 'La lettre '.$_POST['lettre'].' est bien dans le mot ';
    echo"<br>";
    $tom=$_SESSION['tom'];
    $tom[$pos]=$_POST['lettre'];
    echo $tom;
    echo"<br>";
while(strpos($_SESSION['mot'], $_POST['lettre'], $pos+1) != false){
    $pos = strpos($_SESSION['mot'], $_POST['lettre'], $pos+1);
    $tom[$pos]=$_POST['lettre'];
}


if($tom==$_SESSION['mot']){
    echo "Bravo vous avez trouver le mot.";
    echo '<img src="the-wolf-of-wall-street-clap.gif">';
    session_destroy();
}
    $_SESSION['tom']=$tom;
}else if($verife==false){
    echo"<br>";
    echo 'La lettre '.$_POST['lettre'].' est pas dans le mot ';
    echo"<br>";
    echo $_SESSION['tom'];
}
    echo"<br>";

    $po = $_POST['lettre'];
    $_SESSION['ui'] = $_SESSION['ui'].$po;
    echo $_SESSION['ui'];





?>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
