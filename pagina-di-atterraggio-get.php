<?
$badword = isset($_GET['badword']) ? $_GET['badword'] :  "NO WORDS, YOU MUST INSERT FISIC WORD ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container my-3">
  <div class="row">
    <div class="col">
      <h2>Atterraggio Form in GET</h2>
      <h2>Parola da censurare: <?php echo $badword ?></h2>
    </div>
  </div>
</div>
</body>
</html>