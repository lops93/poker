<?php

require_once 'app/Model/Card.php';

use App\Model\Card;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<p>Main Player</p>";
    $mainPlayer = new Card();
    $mainPlayer->getHand();

    $opponents = 2;

    for ($i = 0; $i < $opponents; $i++) {
        echo "<p style='color:red'>Opponent " . $i . "</p>";
        $player[$i] = new Card();
        $player[$i]->getHand();
    }
    ?>
</body>

</html>