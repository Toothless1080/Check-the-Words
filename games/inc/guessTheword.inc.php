<?php

$check = 'Test';

$sql = 'SELECT 
            word 
        FROM 
            words
        ORDER BY 
            RAND()
        LIMIT 1';
$result = $db->rawQuery($sql, Array(10));
$rows = array();
foreach ($result as $row){
    array_push($rows, $row);
}