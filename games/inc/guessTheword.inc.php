<?php

$sql = 'SELECT 
            * 
        FROM 
            word_category';
$result = $db->rawQuery($sql, Array(10));
$rows = array();
foreach ($result as $row){
    array_push($rows, $row);
}

if(isset($_POST['new_word']) && $_POST['new_word']){
    $sql = 'SELECT COUNT(id) as counti FROM words WHERE word = "' . $_POST['new_word'] . '"';
    $result = $db->rawQuery($sql, Array(10));
    if($result[0]['counti'] < 1){
        $sql = 'INSERT INTO words SET word = "' . $_POST['new_word'] . '"';
        if($_POST['cat_select'] != -1){
            $sql .= ', cat_id = ' . $_POST['cat_select'];
        }
        $result = $db->rawQuery($sql, Array(10));
    }
}


function getCategorySelect(){
    global $db;
    $sql = 'SELECT * FROM word_category ORDER BY category ASC';
    $result = $db->rawQuery($sql, Array(10));


    $select = '<select class="col-md-5 form-control" name="cat_select" id="cat_select"><option value="-1">Kategorie w&auml;hlen ...</option>';
    foreach ($result as $row){
        $select .= '<option value="' . $row['id'] . '">' . $row['category'] . '</option>';
    }
    $select .= '</select>';


    return $select;
}