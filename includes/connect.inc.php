<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost","root","") or die ("Could Not connect to database");
mysql_select_db("sih") or  die ("Error in selecting db");
?>
