<?php

// Get settings
include "settings.php";

$error = 0;

// Connect to MySQL 
mysql_connect($host,$user,$password);
@mysql_select_db($database) or die( "Unable to select database"); 
mysql_query("create table `".$mysql_table_prefix."links` (
	link_id int auto_increment primary key not null,
	site_id int,
	url varchar(255) not null,
	title varchar(200),
	description varchar(255),
	fulltxt mediumtext,
	indexdate date,
	size float(2),
	md5sum varchar(32),
	key url (url),
	key md5key (md5sum),
	visible int default 0, 
	level int)");

if (mysql_errno() > 0) {
	print "Error: ";
	print mysql_error();
	print "<br>\n";
	$error += mysql_errno();
}

if ($error >0) {
	print "<b>Creating tables failed. Consult the above error messages.</b>";
} else {
	print "<b>Creating tables successfully completed. Go to <a href=\"search.php\">search.php</a> to start using your search engine!</b><b>To add links to your search engine Go to <a href=\"admin.php\">admin.php</a> The default user and password are: User: admin Pass: admin</b>";
}


?>