<?php

$sql = 'SELECT 
            * 
        FROM 
            words
        WHERE
            cat_id = ' . $_GET['cat_id'] . '
        ORDER BY 
            RAND() 
        LIMIT 1';

$result = $db->rawQuery($sql, Array(10));

