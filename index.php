<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censuratore</title>
</head>
<body>

    <?php
        $text = 'Ti che te tacchet i tacc’, tacchem i tacc’! Chi?! Mi, taccat’ i tacc’ a ti, che te tacchet i tacc’. taccheti ti i tó tacc’, ti che te tacchet i tacc’.'
    ?>

    <h1> 
    <?php // Stampo text
    echo $text; 
    ?> 
    </h1>

    <h3>
    <?php // Stampo la lunghezza di text
    echo 'Lunghezza del testo: ' . strlen($text); 
    ?> 
    </h3>

    <a href="?censure=tacc"> Censura tutti i Tacc </a>

    <h2>
    <?php // Sostituzione di tacc con ***
     echo str_replace($_GET["censure"], '***', $text);
    ?>
    </h2>

</body>
</html>