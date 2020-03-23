<?php
include '../header.php';
include 'inc/guessTheword_edit.inc.php';

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Guess The Words</title>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>
<body>
<div id="main" class="col-xl-12">
    <div class="card">
        <div class="card-header">
            Kategorien
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <th>Name</th>
                <th>L&ouml;schen</th>
                </thead>
                <tbody>
                <?php
                foreach ($rows as $item){
                    echo '<tr>';
                    echo '<td>' . $item['word'] . '</td>';
                    echo '<td>' . '<a href="?del=' . $item['id'] . '">X</a>'.'</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <form method="post">
                <input type="text" id="cat_input" name="cat_input">
                <button class="button button-primary">Hinzuf&uuml;gen</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>