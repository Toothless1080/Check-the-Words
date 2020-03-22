<?php
include '../header.php';
include 'inc/guessTheword.inc.php';

?>

<html>
<head>
    <title>Guess The Words</title>
</head>
<body>
<div class="col-cl-12 text-center full_size justify-content-center align-self-center" style="background-color: aliceblue">
    <?php
    echo '<span>' . $result[0]['word'] . '<span>';
    ?>
</div>
</body>
</html>