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
        $cesure = $_GET["censure"];
        $text_censored = str_replace($cesure, '***', $text);
    ?>

    <!-- TEXT UNCENSORED -->
    <div> 
        <h3><?php echo $text ?></h3>
        <h4><?php echo 'Lunghezza del testo: ' . $length_text ?></h4>
    </div>

    <!-- TEXT CENSURED -->
    <a href="?censure=tacc">Clicca qui per censurare</a>

    <div>
        <h2> <?php echo $text_censored ?> </h2>
    </div>

</body>
</html>