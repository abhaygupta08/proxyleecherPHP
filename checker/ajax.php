<?php 
error_reporting(0);
$lives = fopen("lives.txt", 'w');
//or die("Live Proxies were Deleted")
	$proxyList =array();
function chkForProxy($proxy){
	if ($proxy) {
		$dump = explode(':', $proxy);
		$host = $dump[0];
		$port = $dump[1];
		$check = fsockopen($host,$port,$errno,$errstr,1);
		if($check)
		{
			fwrite($lives,$proxy.'');
			fclose($check);
			return '<span class="live">[+] LIVE   HOST: '.$host.' PORT: '.$port.'';

		}
		else{
		return '<span class="dead">[-] DIE   HOST: '.$host.' PORT: '.$port.'';
			}
}
}
	$data = $_POST['data']; //get input text
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$dump = preg_split('/\s/', $data);
	
	$proxyList = array_unique($dump);

	$listCount = 0;
	if(preg_match('/^[\d]{1,3}+.[\d]{1,3}+.[\d]{1,3}+.[\d]{1,3}+:[\d]{2,5}+/', $data)){
		$status = "Working...";
		echo '<span id="status"><i>STATUS: '.$status.'</i></span><br/>';
		foreach ($proxyList as $proxy){
		if($proxy===""){
			continue;
		}
		elseif (preg_match('/[\d]{1,3}+.[\d]{1,3}+.[\d]{1,3}+.[\d]{1,3}+:[\d]{2,5}+/', $proxy)) {
			$listCount++;
			chkForProxy($proxy);
			print_r('&nbsp;&nbsp;&nbsp;<span class="outputDiv">'.chkForProxy($proxy).'&nbsp;&nbsp;'.$proxy.'</span></span><br/>');
		}
	}
	$status = "DONE";
	echo '<span id="status"><i>STATUS: '.$status.'</i></span>&nbsp;&nbsp;&nbsp;<i>TOTAL: '.$listCount.'</i><br/>';
	echo 'Open as txt file: <a href="'.$_SERVER["SERVER_NAME"].'/checker/lives.txt">Click Me</a>';
		
	}
	else{
			$status = '<span style="color:red;">Invalid Format</span>';
			die('<span id="status"><i>STATUS: '.$status.'</i></span><br/>');
	}
	

		
fclose($lives);
?>