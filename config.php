<?php
// Root Paths
define("ROOT","https://agamotto.rizepoint.com/wp-content/themes/tribunal/");
define("ROOT_URL","https://agamotto.rizepoint.com");

// delete the engage folder. for some reason the ftp auto creates this dir. delete it if it exisits
$engageFolder = '/home/rizepoint/public_html/engage';

$ftp_server = "67.227.192.167";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$ftp_username = 'avengers@rizepoint.com';
$ftp_userpass = 'Th3m0std3@d3stGuy!';
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

if(is_dir($engageFolder)){
	rmdir($engageFolder);
}

// close connection
ftp_close($ftp_conn); 


?>