<?php
include '../header.php';
include 'inc/guessTheword_play.inc.php';

?>

<html>
<head>
    <title>Guess The Words</title>
</head>
<body>
<div id="main" class="col-xl-12 text-center full_size justify-content-center align-self-center">
    <div class="card">
        <div class="card-body">
            <a href="guessTheword_play.php?cat_id=<?= $_GET['cat_id'] ?>"><?= $result[0]['word'] ?></a>
        </div>
    </div>
</div>
</body>
</html>