<?php 
    /**
     * Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
     */ 
    $article="Per assecondare la richiesta dei ragazzi di Boolean Careers, e seguendo le direttive dei loro studenti, ho costruito una tastiera meccanica specifica per programmatori. 
                Ho usato il kit Barleycorn di Yiancar Design (tutto da saldare e montare, oltre che open-source), e ho aggiunto gli switch Lavender Linear da 65 grammi, gli stabilizzatori Durock Smoke V2, e dei keycaps personalizzati prodotti da WASD. È stata la mia prima esperienza di build. 
                Ne è uscita una tastiera meccanica con layout 1800, vale a dire con frecce direzionali e tastierino numerico, priva della linea di tasti F1, F2, F3, ecc e di conseguenza compatta, grande quanto una TKL. 
                È una tastiera programmabile in ogni suo tasto perché basata sul firmware open-source QMK; da Windows, Linux o macOS, si può cambiare layout, registrare macro, attivare o meno le funzioni multimediali, ma anche scaricare il codice sorgente, modificarlo a piacere e poi compilarlo per installarlo sulla eeprom ATmega328P-PU. 
                Questa build è costata poco meno di 300 euro, con una grossa parte dovuta ai keycaps personalizzati di WASD e alla loro importazione dagli Stati Uniti.
                Anche gli switch (58 euro per il pacco da 90) e gli stabilizzatori Durock (21 euro) sono decisamente costosi per la categoria. 
                Si può risparmiare con degli switch Gateron e degli stabilizzatori standard presi su Aliexpress, e con un set di keycaps standard, non personalizzato ma probabilmente più pregiato.
                Dato che il kit Barleycorn costa meno di 100 euro sia in Europa sia in Asia (e io consiglio di comprarlo in Asia perché l'assistenza post-vendita di mykeyboard-eu non mi è piaciuta; è una lunga storia che si è risolta solo grazie ai ragazzi di NovelKeys, il negozio rivale), son convinto che si possa costruire un clone con 150-170 euro.";

    $paragraph= explode(".", $article)
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Snack 5</title>
</head>
<body>
    <?php 
        for($i = 0; $i < count($paragraph); $i++){
            echo "<p>". $paragraph[$i] . "</p>";
        }
    ?>
</body>
</html>