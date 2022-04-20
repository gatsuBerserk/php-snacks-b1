<?php
/**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     *
     */
     $matches = [
        [
          'homeTeam' => 'Guardavalle',
          'awayTeam' => 'Catanzaro',
          'scoreHomeTeam' => 40,
          'scoreAwayTeam' => 22
        ],
        [
            'homeTeam' => 'Soverato',
            'awayTeam' => 'Guardavalle',
            'scoreHomeTeam' => 58,
            'scoreAwayTeam' => 103
        ],
      ]; 

     
?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack php</title>
</head>
<body>
    <div>
        <?php
         for($i = 0; $i < count($matches); $i++){ ?>
            <pre> <?php echo $matches[$i]["homeTeam"]; ?> - <?php echo $matches[$i]["awayTeam"];?> | <?php echo $matches[$i]["scoreHomeTeam"];?> - <?php echo $matches[$i]["scoreAwayTeam"];?>  </pre>
        <?php } ?>
    </div> 

</body>
</html>