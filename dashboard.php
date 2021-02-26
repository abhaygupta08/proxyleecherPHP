<?php
error_reporting(0);
$key = "";
$token = "";
	
try{
	$key = $_POST['key'];
	$token = $_POST['token'];
	if($key==="" or $token==="")
		{
			throw new Exception("INVALID ACCESS");
		}
	
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}



if(($key==="test123" or $key==="test111" or $key==="test222") and ($token==="testing123")){
	fetchContent($key,$token);
}
else{
	header('Content-Type: text/plain');
	echo "
Message: INVALID ACCESS";

}

function fetchContent($key="",$token=""){
	echo "
	<center>
	<h1>WELCOME TECHIE (PUBLIC KEY ACCESS)</h1><hr>
	<br><br>Your API URL is Below :<br><br>";
	
	echo "<br><br>HTTP/S API :<br>";
	print_r($_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=http");
	$url = "https://".$_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=http";
	print_r("<br><form action=\"".$url."\"><button type=\"submit\">OPEN HTTP PROXIES</button></form>");

	echo "<br><br>SOCKS4 API :<br>";
	print_r($_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=socks4");
	$url = "https://".$_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=socks4";
	print_r("<br><form action=\"".$url."\"><button type=\"submit\">OPEN SOCKS4 PROXIES</button></form>");
	
	echo "<br><br>SOCKS5 API :<br>";
	print_r($_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=socks5");
	$url = "https://".$_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=socks5";
	print_r("<br><form action=\"".$url."\"><button type=\"submit\">OPEN SOCKS5 PROXIES</button></form></center>");

	if($_SERVER['SERVER_NAME']==="localhost"){
	print_r("<center>FOR LOCALHOST : "."http://localhost/php_learn/20feb/fetchProxy/?key=".$key."</center>");
	}
}


?>
