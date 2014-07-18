<?php


$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('hartdrupal', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

$result = mysql_query('SELECT * FROM system where name =\'system\'');

    while ($row = mysql_fetch_array($result)) {
     
        $info = $row['info'];
        
        $uns = unserialize($info);
        
        echo '<pre>'; print_r($uns); 
        
    }



?>