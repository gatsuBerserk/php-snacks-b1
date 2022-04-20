<?php
    /**
     * Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
     */
    $randomInteger=[];
     for($i = 0; $i < 15; $i++){
         $random = rand(1, 100); 
         if(!in_array($random, $randomInteger)){
             $randomInteger[]=$random; 
            //  oppure
            // array_push($randomInteger, $random);
         }
     };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <pre>
        <?php
            var_dump($randomInteger); 
        ?>
    </pre>
</body>
</html>