<?php
$text=$_GET['userText'];
$hidden_word=$_GET['badWord'];
$word_replace=str_replace($hidden_word,'***',$text);
$length=strlen($text);
$number_words= explode(" ",$text);
$words=str_word_count($text,0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo $text; ?>
    </p>
    <?php echo "<p> la lunghezza di questa stringa è $length e il numero di parole è $words</p> "?>

    <p>
        <?php echo $word_replace . "<br> la lunghezza della nuova stringa è "  . strlen($word_replace) 
        . " <br>il numero di parole contenute senza *** è" . str_word_count($word_replace)
        . " <br> invece con *** è" . str_word_count($word_replace,0,"***");?>
    </p>
    <h3>questa è la lista delle parole</h3>
    
    <?php var_dump( str_word_count($word_replace,1,"***"))?>;
    

</body>
</html>