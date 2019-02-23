<?php

//including the Mysql connect parameters.
@error_reporting(0);
@$con = mysql_connect('localhost','root','');
// Check connection
if (!$con)
{
    echo "Failed to connect to MySQL: " . mysql_error();
}

@mysql_select_db('gwht',$con) or die ( "Unable to connect to the database: $dbname");
?>