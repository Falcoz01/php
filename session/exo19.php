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

<form action="exo19.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Chiffre 1</label>
    <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="input1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >chiffre 2</label>
    <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="input2">
  </div>


  <div class="form-check">
  <input class="form-check-input" type="radio" name="operateur" id="flexRadioDefault1" value="plus">
  <label class="form-check-label" for="flexRadioDefault1">
   +
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="operateur" id="flexRadioDefault2" value="moins"> 
  <label class="form-check-label" for="flexRadioDefault2">
    -
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="operateur" id="flexRadioDefault2" value="multiplier">
  <label class="form-check-label" for="flexRadioDefault3">
    *
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="operateur" id="flexRadioDefault2"  value="diviser">
  <label class="form-check-label" for="flexRadioDefault4">
    /
  </label>
</div>
<button type="submit" class="btn btn-primary">Resultat</button>
</form>

<?php
function plus($input1 ,$input2){
    return $input1+$input2;
}
function moins($input1 ,$input2){
    return $input1-$input2;
}
function multiplier($input1 ,$input2){
    return $input1*$input2;
}
function diviser($input1 ,$input2){
    return $input1/$input2;
}
if($_POST["operateur"]== "plus"){

    echo plus($_POST["input1"] ,$_POST["input2"]);

}
if($_POST["operateur"]== "moins"){

    echo moins($_POST["input1"] ,$_POST["input2"]);

}
if($_POST["operateur"]== "multiplier"){

    echo multiplier($_POST["input1"] ,$_POST["input2"]);

}
if($_POST["operateur"]== "diviser"){

    echo diviser($_POST["input1"] ,$_POST["input2"]);

}
?>

</body>











<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
