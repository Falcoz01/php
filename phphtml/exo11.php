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



<table class="table table-dark table-hover">
    <thead>
    <tr>
        <th scope="col">Nom du joueur</th>

<?php
$tab6 = [
    ['nom' => 'Myron Boadu','nbBut' => 1, 'ville' => 'Monaco'],
    ['nom' => 'Alexandre Lacazette','nbBut' => 9, 'ville' => 'Olympique Lyonnais'],
    ['nom' => 'Terem Igobor Moffi','nbBut' => 10, 'ville' => 'Lorient'],
    ['nom' => 'Johan Gastien','nbBut' => 1, 'ville' => 'Clermont Foot 63'],
    ['nom' => 'Jonathan Christian David','nbBut' => 9, 'ville' => 'LOSC Lille'],
    ['nom' => 'Myron Boadu','nbBut' => 9, 'ville' => 'Monaco'],
    ['nom' => 'Junior Neymar','nbBut' => 11, 'ville' => 'Paris Saint-Germain'],
    ['nom' => 'Kylian Mbappe','nbBut' => 12, 'ville' => 'Paris Saint-Germain']
];

foreach($tab6 as $key => $value){
    echo'<th scope="col">'.$value['nom'].'</th>';
}

?>

</thead>
 </tr>
 <tbody>
    <tr>
    <th scope="row">Nombre de but</th>
        <?php
        foreach($tab6 as $key => $value){
            
            echo '
            <td>'.$value['nbBut'].'</td>';
           }
    ?>
    </tr>
    <tr>
    <th scope="row">ville</th>
        <?php
        foreach($tab6 as $key => $value){
            
            echo '
            <td>'.$value['ville'].'</td>';
           }
    ?>
    </tr>
    </table>
</body>











<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>