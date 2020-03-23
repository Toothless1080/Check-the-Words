<?php

if(isset($_POST['cat_input']) && $_POST['cat_input'] != ''){
    $sql = 'INSERT INTO words SET word = "' . $_POST['cat_input'] . '"';
    $result = $db->rawQuery($sql, Array(10));
}

if(isset($_GET['del']) && $_GET['del'] != ''){
    $sql = 'DELETE FROM words WHERE id = ' . $_GET['del'];
    $result = $db->rawQuery($sql, Array(10));
}

$sql = 'SELECT 
            id,
            word 
        FROM 
            words';
$result = $db->rawQuery($sql, Array(10));
$rows = array();
foreach ($result as $row){
    array_push($rows, $row);
}