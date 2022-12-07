<?php
session_start();

if(isset($_POST['button1'])){
    session_destroy();
    header('Location: bataillenavale.php');
exit;
}


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
<link rel="stylesheet" href="bataillenavale.css">
</head>
<body>

<form action="bataillenavale.php" method="POST">
<table>
<tbody> <?php
$nb = 0;


if(isset($_SESSION['plateau'])){

}else{
    $tab = [];
    $bateau = [];
    for($i=0 ;$i<100 ;$i++){
        $tab[$i] = '<input type="submit" id="case" name="case' . $i . '" value="' . $i . '">';
        $bateau[$i] = "O";
    }
    $hju = rand(0, 95);
    
    if($hju%10==7){
        $hju = $hju + 3;
    }else if($hju%10==8){
        $hju = $hju + 2;
    }else if($hju%10==9){
        $hji = $hju + 1;
    }
    echo $hju;
    $bateau[$hju] = "b";
    $bateau[$hju+1] = "b";
    $bateau[$hju+2] = "b";
    $bateau[$hju+3] = "b";
    $_SESSION['plateau'] = $tab;
    $_SESSION['bateau'] = $bateau;
}

for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 10;$j++){
        echo '<td>';
       echo  '<div class="vide"> ';

       
       if(isset($_POST["case".$nb])){
         $bateau=$_SESSION['bateau'] ;
            $plateau = $_SESSION['plateau'];
            if($bateau[$nb]!= "b"){
                $plateau[$nb] = "O";
            }else{
                $plateau[$nb] = "b";
               
            }
          
            $_SESSION['plateau'] = $plateau;
        echo  $plateau[$nb];
    }else{
        $plateau= $_SESSION['plateau'];
            echo $plateau[$nb];

    }
        $nb++;
        
          echo '</div>';

        echo '</td>';
    }

    echo'</tr>';
}?>
<button type="submit" class="btn btn-primary" name="button1" value="button1">REJOUER</button>

</tbody>
</table>
</form>








</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>