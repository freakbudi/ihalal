<?php
header("Access-Control-Allow-Origin: *");
    include '../config.php';

    $query=mysql_query("select * from content ");
    $content=array();
    while ($row=mysql_fetch_assoc($query)) {
        $content[]=$row;
    }
    echo '{"content":'.json_encode($content).'}';
    mysql_close($con);
?>
