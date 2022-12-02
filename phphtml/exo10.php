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




<ul>
   <?php
   
   $tab5 = [
    'Junior Neymar' => 11,
      'Alexandre Lacazette' => 9,
      'Terem Igobor Moffi' => 10,
      'Johan Gastien' => 1,
      'Jonathan Christian David' => 9,
      'Myron Boadu' => 1,
      'Kylian Mbappe' => 12
  ];
  
   foreach($tab5 as $key => $value){

    if($value>10){
    echo '<li>'.$key.'<span class="badge rounded-pill text-bg-primary"> </span>'.' '.$value.'</li>';
    }
   else if($value<=10 && $value>5){
    echo '<li>'.$key.'<span class="badge rounded-pill text-bg-warning"> </span>'.' '.$value.'</li>';
   }  
   else{
    echo '<li>'.$key.'<span class="badge rounded-pill text-bg-danger"> </span>'.' '.$value.'</li>';
   }
}
   ?>
</ul>








<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>