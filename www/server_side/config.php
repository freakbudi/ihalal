
<?php
    $server="localhost";
    $user="root";
    $password="";
    
    $con=mysql_connect($server,$user,$password) or die(mysql_errno("can't connect DB"));
    $db=mysql_select_db("ihalal") or die("DB not found");
    
?>