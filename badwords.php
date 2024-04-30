<!-- Variabili PHP -->
<?php 
$paragraph = $_GET['paragraph'];
$badWord = $_GET['badword'];
$censuredParagraph = str_replace($badWord, '***', $paragraph)
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>BadWords</title>
</head>
<body>
<div>
    <p>
       <strong>Il paragrafo che hai scritto è: </strong> <?php echo $paragraph ?>
    </p>
    <span><strong>E la sua lungheza è di </strong> <?php echo strlen($paragraph) ?> <strong> caratteri.</strong></span>
</div>
<div>
    <p>
        <strong>Ecco il testo censurato: </strong> <?php echo $censuredParagraph ?>
    </p>
    <span><strong>E la sua lungheza è di </strong> <?php echo strlen($censuredParagraph) ?> <strong> caratteri.</strong></span>
</div>
</body>
</html>