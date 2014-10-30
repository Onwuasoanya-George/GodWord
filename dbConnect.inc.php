<?php
$conn_err = '<p > Could not connect</p>';
$mysql_host = 'localhost';
$mysql_user = 'godwordd';
$mysql_pass = '';
$mysql_db =  'godworddaily';

if(@mysql_connect($mysql_host, $mysql_user, $mysql_pass)){
	if(@mysql_select_db($mysql_db) ){
		echo '';

	}
		else{
		 die($conn_err);
		}
}
else{
 die ($conn_err);
}


?>