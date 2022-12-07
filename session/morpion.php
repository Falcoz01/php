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
<link rel="stylesheet" href="morpion.css">
</head>
<body>
<?php
$tab = ["X","O"];
$choix=rand(0,1);

function remplir_case($c ,$s){
    if($_POST[$c]==$c){
        $tab = ["X","O"];
        $_SESSION[$s] = $tab[$_SESSION['caractere']];
        $_SESSION['caractere'] = ($_SESSION['caractere'] == 0) ? 1 : 0;
        
    }
}
if(isset($_SESSION['caractere'])){

}else{
    $_SESSION['caractere'] = 0;
}
$nombre = $tab[$choix];
    if(isset($_POST['case1'])){
    remplir_case("case1", "sauv1");
}

if(isset($_POST['case2'])){
    remplir_case("case2", "sauv2");
}
if(isset($_POST['case3'])){
    remplir_case("case3", "sauv3");
}
if(isset($_POST['case4'])){
    remplir_case("case4", "sauv4");
}
if(isset($_POST['case5'])){
    remplir_case("case5", "sauv5");
}
if(isset($_POST['case6'])){
    remplir_case("case6", "sauv6");
}
if(isset($_POST['case7'])){
    remplir_case("case7", "sauv7");
}
if(isset($_POST['case8'])){
    remplir_case("case8", "sauv8");
}
if(isset($_POST['case9'])){
    remplir_case("case9", "sauv9");
}
?> 
<h1 class="t1">JEUX DU MORPION</h1>
<form action="morpion.php" method="POST">
<table>
<tbody>
<tr>
    <td>
    <div class="vide"> 
        <?php
            if(isset($_SESSION['sauv1'])){
            echo $_SESSION['sauv1'];
        
            }else{
            echo '<input type="submit" id="case" name="case1" value="case1">';
            }
        ?>
</div>
    
    </td>
    <td>
    <div class="vide"> 
        <?php
            if(isset($_SESSION['sauv2'])){
            echo $_SESSION['sauv2'];
        
            }else{
            echo '<input type="submit" id="case" name="case2" value="case2">';
            }
        ?>
    </div>
    </td>
    <td>
    <div class="vide">  <?php
            if(isset($_SESSION['sauv3'])){
            echo $_SESSION['sauv3'];
        
            }else{
            echo '<input type="submit" id="case" name="case3" value="case3">';
            }
        ?></div>
    </td>
</tr>
<tr>
    <td>
    <div class="vide">  <?php
            if(isset($_SESSION['sauv4'])){
            echo $_SESSION['sauv4'];
        
            }else{
            echo '<input type="submit" id="case" name="case4" value="case4">';
            }
        ?></div>
    </td>
    <td>
    <div class="vide">  <?php
            if(isset($_SESSION['sauv5'])){
            echo $_SESSION['sauv5'];
        
            }else{
            echo '<input type="submit" id="case" name="case5" value="case5">';
            }
        ?></div>
    </td>
    <td>
    <div class="vide">  <?php
            if(isset($_SESSION['sauv6'])){
            echo $_SESSION['sauv6'];
        
            }else{
            echo '<input type="submit" id="case" name="case6" value="case6">';
            }
        ?></div>
    </td>
</tr>
<tr>
    <td>
    <div class="vide"> <?php
            if(isset($_SESSION['sauv7'])){
            echo $_SESSION['sauv7'];
        
            }else{
            echo '<input type="submit" id="case" name="case7" value="case7">';
            }
        ?></div>
    </td>

    <td>
    <div class="vide">  <?php
            if(isset($_SESSION['sauv8'])){
            echo $_SESSION['sauv8'];
        
            }else{
            echo '<input type="submit" id="case" name="case8" value="case8">';
            }
        ?></div>
    </td>

    <td>
    <div class="vide">  <?php
            if(isset($_SESSION['sauv9'])){
            echo $_SESSION['sauv9'];
        
            }else{
            echo '<input type="submit" id="case" name="case9" value="case9">';
            }
        ?></div>
    </td>
</tr>
</tbody>
</table>
<button type="submit" class="btn btn-primary" name="button1" value="button1">REJOUER</button>
</form>


<?php
if(isset($_POST['button1'])){
    session_destroy();
    header('Location: morpion.php');
exit;
}

?>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>