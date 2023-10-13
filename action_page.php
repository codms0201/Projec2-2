<?php
    $level = $_POST['level'];
    $word = $_POST['word'];
    $meaning = $_POST['meaning'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Word... </h3>
    <div>Level: <?=$level?> </div>
    <div>Word:  <?=$word?> </div>
    <div>Meaning: <?=$meaning?> </div>
</body>
</html>