<?php
include '../header.php';
include 'inc/guessTheword.inc.php';

?>

<html>
<head>
    <title>Guess The Words</title>
</head>
<body>
<div id="main" class="col-xl-12 text-center full_size justify-content-center align-self-center">
    <div class="card">
        <div class="card-header">
            <form method="post">
                <div class="col-md-6">
                    <div class="form-group row">
                        <input maxlength="120" type="text" class="col-md-5 form-control" name="new_word" id="new_word" placeholder="Neues Wort" required>
                        <?= getCategorySelect() ?>
                        <button class="col-md-2 btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="col-xl-12">
                <?php
                $counter = 0;
                echo '<div class="row">';
                foreach ($rows as $item){
                    if($counter == 3){
                        echo '</div><div class="row">';
                    }
                    echo '<div class="col-md-4 card">';
                        echo '<a href="guessTheword_play.php?cat_id=' . $item['id'] .'"><div class="card-body" style="font-size: 16px">';
                            echo $item['category'];
                        echo '</div></a>';
                    echo '</div>';
                }
                echo '</div>';
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>