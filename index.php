<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <?php //1. Creare una variabile con assegnato un testo per popolare un paragrafo. //Visualizzare a schermo il paragrafo.
    $textParagraph = 'ma va vissuta in avanti.';
    $titleMain = 'Kirkegaard in PHP';
    //Visualizzare a schermo la lunghezza di testo del paragrafo
    $length = strlen ('La vita può essere capita solo guardando indietro, ma va vissuta in avanti. '. $textParagraph);
    //Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, 
    //ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
    //Stampare a schermo il paragrafo con il testo censurato.
    
    $myString = 'La gente esige la libertà di parola per compensare la libertà di pensiero, che invece rifugge.';
    //str_replace (porzioneDaModificare, conCosa,stringa), cambierà il valore di una porzione della stringa in un altro.
    $badword = str_replace ('libertà', '***', $myString);

    ?>

    <!--SVOLGIMENTO ESERCIZIO 1-->

    <h1 class="h1-prop"><?php echo $titleMain ?></h1>
    <p class="p-prop">La vita può essere capita solo guardando indietro, <?php echo $textParagraph ?></p>

    <!--SVOLGIMENTO ESERCIZIO 2-->

    <p class="p-prop"><?php echo $length ?></p>
    
    <!--SVOLGIMENTO ESERCIZIO 3-->
    <p class="p-prop"><?php echo $badword ?></p>

</body>
</html>