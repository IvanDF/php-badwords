<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censuratore</title>
</head>
<body>

    <?php // Vars
        $text = 'Ti che te tacchet i tacc’, tacchem i tacc’! Chi?! Mi, taccat’ i tacc’ a ti, che te tacchet i tacc’. taccheti ti i tó tacc’, ti che te tacchet i tacc’.';
        $length_text = strlen($text);
        $censure = $_GET["censure"];
        $text_censored = str_replace($censure, '***', $text);
        $word_censored_pos = strpos($text, $censure);
        $text_censored_upper = ucwords($text_censored);
    ?>

    <!-- TEXT UNCENSORED -->
    <div> 
        <h3><?php echo $text ?></h3>
        <h4><?php echo 'Lunghezza del testo: ' . $length_text ?></h4>
    </div>

    <!-- TEXT CENSURED -->
    <strong>
        <a href="?censure=tacc">Clicca qui per censurare</a>
    </strong>

    <div>
        <h2> <?php echo $text_censored_upper ?> </h2>
    </div>

    <p> 
    La posizione del primo 
    <strong>
    <?php
    echo $censure . ' è ';
    echo $word_censored_pos;
    ?> 
    </strong>
    </p>

</body>
</html>