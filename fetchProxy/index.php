<?php
error_reporting(0);
header('Content-Type: text/plain');
$key = "";
	
try{
	$key = $_GET['key'];
	if($key==="")
		{
			exit("Message: NO KEY ACCESS");
			throw new Exception("INVALID ACCESS");
			
		}
	
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}



if($key==="test123" or $key==="test111" or $key==="test222"){
	
	fetchContent($key,$token);
}
else{
	echo "Message: INVALID KEY";

}

function fetchContent($key="",$token=""){
	$file = fopen("../proxy.txt","r") or die("Message: UNABLE TO OPEN FILE(FILE REMOVED FROM SERVER)");
	for($i=0;$i<filesize("../proxy.txt");$i++){
		echo fgetc($file);
	}
}

?>
