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




<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
   
    <?php
$tab2 = [

    'Google' => 'https://www.google.com/' ,
    'Deezer' => 'https://www.deezer.com/',
    'Spotify' => 'https://www.spotify.com/'
    ];

    foreach($tab2 as $key => $value){
        echo '<li class="breadcrumb-item active" aria-current="page"><a href='.$value.'> '.$key.'</a> </li>';
       }
          
    
    ?>

</ol>
  </nav>
</body>











<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>