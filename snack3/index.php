<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z --> 

<?php 
   $posts = [
   
       '10/01/2019' => [
           [
               'title' => 'Post 1',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 1'
           ],
           [
               'title' => 'Post 2',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 2'
           ],
       ],
       '10/02/2019' => [
           [
               'title' => 'Post 3',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 3'
           ]
       ],
       '15/05/2019' => [
           [
               'title' => 'Post 4',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 4'
           ],
           [
               'title' => 'Post 5',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 5'
           ],
           [
               'title' => 'Post 6',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 6'
           ]
       ],
   ]; 

   $date=array_keys($posts); 
   $post=array_values($posts)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
        <?php
            for($i=0; $i < count($posts); $i++){ ?>
                <h2>Post date: <?php  echo $date[$i]; ?></h2>
    
                <?php for( $x=0; $x < count($post[$i]); $x++){ ?>
                    <h3><?php  echo $post[$i][$x]['title']; ?></h3>
                    <h4><?php  echo $post[$i][$x]['author']; ?></h4>
                    <h5><?php  echo $post[$i][$x]['text']; ?></h5>
                <?php  } ; ?>
            <?php } ?>
</body>
</html>