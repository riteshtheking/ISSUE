<?php 


//Make Your SQL Secure
$hst = '';  //Your Mysql Host 
$usr = '';  //Your Mysql Username
$psd = '';  //Your Mysql Password
$dbs = '';  //Your Mysql Database Name
$conxc = new mysqli($hst,$usr,$psd,$dbs); 
if (mysqli_connect_errno())
trigger_error("Unable to connect to MySQLi database.");
$DB->set_charset('utf8');
   



//Using PHP Header funtion that no one can open your webpage in iframe
 header("X-FRAME-OPTIONS: DENY");



//Make Your Files Secure
$server = $_SERVER['PHP_SELF'];
$path = pathinfo( $server );
$file = $path['basename'];
if (isset($_GET[$file]) {
    $filename = $_GET[$file];
    header('Content-Type: application/x-octet-stream');
    header('Content-Transfer-Encoding: binary');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    echo file_get_contents($filename);
}




?>
