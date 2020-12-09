<?php
require_once 'martin-kokes.php';
require_once 'sorin-eni.php';
require_once 'simon-siksta.php';
require_once 'martin-ledl.php';
require_once 'jan-slechta.php';
require_once 'jakub-vavru.php';
require_once 'ngo.php';
require_once 'stepan-kolarovsky.php';
require_once 'libor-pluhacek.php';
require_once 'jan-hladik.php';
require_once 'michal-placek.php';
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $img = file_get_contents('img.txt'); ?>
<img style="display:block; max-width: 100%; height: 100%;" src="data:image/jpeg;base64, <?= $img ?>" alt="hidden image" srcset="">
    
</body>
</html>