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


    
    
    
    
    
    
    
//Set $iframe to 0 if you wantto prevent your page from being showed in iframe
$iframe = '1';
    if($iframe==0){
 //Using PHP Header's xframe funtion that no one can open your webpage in iframe
 header("X-FRAME-OPTIONS: DENY");    }
    if{$iframe==1}{
 //Allowing PHP Header xframe funtion that anyone can open your webpage in iframe
 header("X-FRAME-OPTIONS: ALLOW");
}
    
    

//Set $rightclick to 0 if you want your page not to be right clickable
$rightclick = '1';
    if($rightclick==0){
 //Adding A Simple HTML Script That Won't Let Anyone Right Click On Your Page
 echo"<body oncontextmenu='return false'>";    }
    if{$rightclick==1}{
 //Allowing PHP Header xframe funtion that anyone can open your webpage in iframe
 echo"<body>";
}
    
    

    
    
    
    
?>
