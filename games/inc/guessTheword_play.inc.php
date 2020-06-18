<?php

$sql = 'SELECT 
            * 
        FROM 
            words
        WHERE
            cat_id = ' . $_GET['cat_id'] . '
            AND used = 0
        ORDER BY 
            RAND() 
        LIMIT 1';

$result = $db->rawQuery($sql, Array(10));

if(empty($result)){
    $usql = 'UPDATE words SET used = 0 WHERE cat_id = ' . $_GET['cat_id'];
    $db->rawQuery($usql, Array(10));

    $sql = 'SELECT 
            * 
        FROM 
            words
        WHERE
            cat_id = ' . $_GET['cat_id'] . '
            AND used = 0
        ORDER BY 
            RAND() 
        LIMIT 1';

    $result = $db->rawQuery($sql, Array(10));
}

$ssql = 'UPDATE words SET used = 1 WHERE ID = ' . $result[0]['id'];
$db->rawQuery($ssql, Array(10));