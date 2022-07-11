<?php

// Get Settings
include "settings.php";

// Set Varibles
$url=$_POST['url'];
$title=$_POST['title'];
$des=$_POST['des'];
mysql_connect($host,$user,$password); // Connect to the DB
@mysql_select_db($database) or die( "Unable to select database");
mysql_query("INSERT INTO links 
(link_id, site_id, url, title, description, fulltxt, indexdate, size, md5sum, visible, level) VALUES('', '', '$url', '$title', '$des', '', '', '', '', '', '' ) ") 
or die(mysql_error());  
mysql_close();
Print "The link has been successfully added to the database. <a href=\"admin.php\">Go Back</a>"; 
?>
