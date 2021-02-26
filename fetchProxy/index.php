<?php
error_reporting(0);
header('Content-Type: text/plain');
$key = "";
	
try{
	$key = $_GET['key'];
	$proxyType = $_GET['proxyType'];
	if($key==="" and $proxyType==="" )
		{
			exit("Message: NO KEY ACCESS");
			throw new Exception("INVALID ACCESS");
			
		}
	
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}



if($key==="test123" or $key==="test111" or $key==="test222"){
	
	fetchContent($key,$proxyType);
}
else{
	echo "Message: INVALID KEY";

}

function fetchContent($key="",$proxyType="http"){
	if($proxyType==="http"){
		$filename = '../proxyHTTP.txt';
	}
	elseif ($proxyType==="socks4") {
	$filename = '../proxySOCKS4.txt';
	}
	elseif ($proxyType==="socks5") {
	$filename = '../proxySOCKS5.txt';
	}
	else{
		exit("Message: ERROR in proxyType");
	}
	$file = fopen($filename,"r") or die("Message: UNABLE TO OPEN FILE(FILE REMOVED FROM SERVER)");
	for($i=0;$i<filesize($filename);$i++){
		echo fgetc($file);
	}
}

?>
