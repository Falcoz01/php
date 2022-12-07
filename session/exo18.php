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
<h1>Bienvenue</h1>



<form action="exo18.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Mettre un chiffre au hasard</label>
    <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="chiffre">
  </div>
  <button type="submit" class="btn btn-primary">Reponse</button>
  </form>

<?php

if (isset($_SESSION['chiffre_hasard'])) {

    $_SESSION['chiffre_hasard'];
   }else{
    $_SESSION['chiffre_hasard'] = rand(0,100);
   }
   

   
if(isset($_POST["chiffre"])){
    if($_POST["chiffre"] < $_SESSION['chiffre_hasard']){
        echo "plus grand";
    }else if($_POST["chiffre"] > $_SESSION['chiffre_hasard']){
        echo "plus petit";
    }
    if($_POST["chiffre"] == $_SESSION['chiffre_hasard']){
        echo "BRAVO TU A GAGNE :)";
        session_destroy();

    }
    
  
}

?>




</body>











<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
