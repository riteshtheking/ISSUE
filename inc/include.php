<?php 


//Define Your Sitename
define("sitename","Enter Your Site Name");


if(defined("sitename")){
   
class ISSUES{
private $conxc,$arr,$fol,$i,$input; 
   
//Set $errors to 0 if you want to hide the errors of your page and set it to 1 if you want to show them
$error = '0';
error_reporting(E_ALL);
ini_set("display_errors", $error);






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
    
    

//Put All Of Your Javascript in main.min.js.php file and change $cpt to the website url you want to access the file from 
echo"<script>";
 include('main.min.js.php');
echo"</script>";    
    
    
    
    
//Put All Of Your Css in main.min.csss.php file and change $cpt to the website url you want to access the file from 
echo"<style>";
 include('main.min.css.php');
echo"</style>";    
    
    
//Some Useful Functions to make it easy to develope for you... 
function speak($speak){echo"<script>
function tunnuSay(text,callback){var u=new SpeechSynthesisUtterance();u.text=text;u.lang='en-US';u.onend=function(){if(callback){callback();}};u.onerror=function(e){if(callback){callback(e);}};speechSynthesis.speak(u);
tunnuSay('".$speak."');</script>";}
function clearcookies(){echo"<script language='javascript'>
document.cookie.split(';').forEach(function(c) { document.cookie = c.replace(/^ +/, '').replace(/=.*/, '=;expires=' + new Date().toUTCString() + ';path=/'); });
javascript:(function(){document.cookie.split(';').forEach(function(c) { document.cookie = c.replace(/^ +/, '').replace(/=.*/, '=;expires=' + new Date().toUTCString() + ';path=/'); }); })();</script>";}
function getlinks($code="https://www.google.com"){
    $code=file_get_contents($code);
    $urlContent = $code;
$dom = new DOMDocument();
@$dom->loadHTML($urlContent);
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");

for($i = 0; $i < $hrefs->length; $i++){
    $href = $hrefs->item($i);
    $url = $href->getAttribute('href');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    // validate url
    if(!filter_var($url, FILTER_VALIDATE_URL) === false){
        echo '<a href="'.$url.'"style="color:white;text-decoration:none;">'.substr($url,0,14).'...</a>, ';
    }}}
    
function googlefont($fontname){echo"<link href='https://fonts.googleapis.com/css?family=".$fontname."' rel='stylesheet'>";}   
function alert($alert){ echo"<script>alert('".$alert."');</script>";}
function source($url){echo file_get_contents($url);}
function showcookie($name){$cookie_name=$name;echo $_COOKIE[$cookie_name];}  
function deletecookie($name=""){$e=$name;$e=explode(",",$e);foreach($e as $n){$cookie_name=$n;$this->cookie($cookie_name, "",1);}}
function deletefile($filename="demo.docx"){$e=$filename;$e=explode("*",$e);foreach($e as $f){if(file_exists($f)){unlink($f);}else{echo"<br><font color='red'>Sorry! <b>".$f." </b>is Not Found.Please Check the File name and Source</font><br>";}}} 
function gettitle($url="https://google.com"){$code=file_get_contents($url);preg_match("/<title>(.+)<\/title>/siU", $code, $matches);$title = $matches[1];return $title;}
function getfevicon($code="https://google.com"){$code=file_get_contents($code);$doc = new DOMDocument();$doc->strictErrorChecking = FALSE;$doc->loadHTML($code);$xml = simplexml_import_dom($doc);$arr = $xml->xpath('//link[@rel="shortcut icon"]');return$arr[0]['href'];}
function secure_string($str="",$error=__LINE__){if($str==""){if($_SERVER["SERVER_NAME"]=="localhost"){echo"<br><font color='red'>Error ID: ".$error."<br>Sorry ! Realstr() function is used for an Extra Security Layer of a String.The String is Empty.</font><br>";}}else{$str=htmlentities($str);$str=htmlspecialchars($str);$str=mysqli_real_escape_string($this->con,$str);return $str;}}    
function copyfromurl($url,$host="/"){$code=file_get_contents($url);$file1=explode("/",$url);$full=end($file1);$full=explode(".",$full);$filename=$full[0];$ex=mime_content_type($url);$ex=explode("/",$ex);$ex=end($ex);echo $ex;if(strlen($filename)==0){$filename=date("d_m_Y_h_i_s");}if(strlen($ex)==0){$ex=$full[1];}$file=$host.$filename.".".$ex;$this->createfile($file,$code);}   
    
    }}else{
       echo" ISSUES is an Internet Server Security and User Experiece System developed by <b>Ritesh Kushwaha</b>.<br> It's important to define your Sitename in your <b>inc/include.php</b> file.Once that done, You'll be able to use it...<br> This is an opensource project so feel free to contibrute><br><br> Check it out at <a href='https://github.com/riteshtheking/ISSUES/'>Github</a>. ";
    }    
    
    
?>
