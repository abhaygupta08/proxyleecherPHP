<style type="text/css">
	.live{
		color:green;
	}
	.dead{
		color:red;
	}
</style>

<?php
error_reporting(0);
$lives = fopen("lives.txt", 'w');
	$open = fopen('a.txt','r');
	$lC = 0;
	while(!feof($open)){
  $line = fgets($open);
  $lC++;
}
rewind($open); //reset file pointer
for($i=0;$i<$lC;$i++){
//	echo fgets($open)."<br>";
	$proxy = fgets($open);
	if ($proxy) {
		$dump = explode(':', $proxy);
		$host = $dump[0];
		$port = $dump[1];
		$check = fsockopen($host,$port,$errno,$errstr,1);
		if($check)
		{
			echo '<span class="live">[+] LIVE   HOST: '.$host.' PORT: '.$port.'</span><br/>';
			fwrite($lives, $host.':'.$port.'');
			fclose($check);
		}
		else{
		echo '<span class="dead">[-] DIE   HOST: '.$host.' PORT: '.$port.'</span><br/>';
			}
	}
}
fclose($lives);
fclose($open);
?>
