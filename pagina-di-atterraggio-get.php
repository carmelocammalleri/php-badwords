<?
// parola da censurare
$badword = isset($_GET['badword']) ? $_GET['badword'] :  "NO WORDS, YOU MUST INSERT FISIC WORD ";

// paragrafo censurato
$textParagraph = isset($_GET['text-area']) ? $_GET['text-area'] : '';

// lunghezza paragrafo
$badword_len = strlen($textParagraph);


$censoredParagraph = str_replace($badword, '#####', $textParagraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Document</title>
</head>
<body>
<div class="container my-3">
  <div class="row">
    <div class="col">
      <h2>Censuriamo la parola</h2>

      <h2>Parola da censurare: -
        <span class="text-danger"><?php echo $badword ?></span>
       - </h2>

      <p><?php echo $censoredParagraph  ?></p>
      <p>Lunghezza del paragrafo: <?php echo $badword_len ?> </p>
    </div>
  </div>
</div>
</body>
</html>