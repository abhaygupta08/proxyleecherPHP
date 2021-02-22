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
	<h1>WELCOME newbie</h1><hr>
	<br><br>Your URL is Below :<br><br>";
	print_r($_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."</center>");
	if($_SERVER['SERVER_NAME']==="localhost"){
	print_r("<center>FOR LOCALHOST : "."http://localhost/php_learn/20feb/fetchProxy/?key=".$key."</center>");
	}
}


?>
