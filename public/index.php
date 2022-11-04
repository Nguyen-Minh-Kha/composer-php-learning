<?php

use App\Charcter;

require __DIR__ . '/../vendor/autoload.php';

$arthur = new Charcter("Arthur");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Game</title>
</head>

<body>
    <h1> My Game</h1>
    <pre>
        <?= $arthur ?>
    </pre>
</body>

</html>