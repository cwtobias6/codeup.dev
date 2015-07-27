<?php
require "functions.php";
require_once "../Input.php";

var_dump($_GET);

$score = Input::get('score');

if(Input::has('hit')) {
    $score++;
} else if(Input::has('miss')){
    $score--;
}



?>
<!doctype html>
<html>
    <head>
        <title>PONG</title>
    </head>
    <body>
        <h2>PONG</h2>
        <h1>score: <?= $score ?> </h1>

    <a href="/ping.php?score=<?= $score ?>&hit=true">Hit</a>
    <a href="/ping.php?score=<?= $score ?>&miss=true">Miss</a>
        
    </body>
</html>