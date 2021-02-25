<?php
set_time_limit(3*60);


header('Content-Type: text/plain');
$fileHTTP = fopen("proxyHTTP.txt", "w") or die("Unable to open file!");
$fileSOCKS4 = fopen("proxySOCKS4.txt", "w") or die("Unable to open file!");
$fileSOCKS5 = fopen("proxySOCKS5.txt", "w") or die("Unable to open file!");


//########################################
//------- (http)
$oneHTTP = file_get_contents("https://www.proxy-list.download/api/v1/get?type=http");  
fwrite($fileHTTP, $oneHTTP."
");
//------- (socks4)
$oneSOCKS4 = file_get_contents("https://www.proxy-list.download/api/v1/get?type=socks4");  
fwrite($fileSOCKS4, $oneSOCKS4."
");
//------- (socks5)
$oneSOCKS5 = file_get_contents("https://www.proxy-list.download/api/v1/get?type=socks5");  
fwrite($fileSOCKS5, $oneSOCKS5."
");
//########################################

//--------(http)
$twoHTTP = file_get_contents("https://api.proxyscrape.com/?request=displayproxies&proxytype=http&timeout=10000&country=all&anonymity=all&ssl=all");
fwrite($fileHTTP, $twoHTTP."
");
//--------(socks4)
$twoSOCKS4 = file_get_contents("https://api.proxyscrape.com/?request=displayproxies&proxytype=socks4&timeout=10000&country=all&anonymity=all&ssl=all");
fwrite($fileSOCKS4, $twoSOCKS4."
");
//--------(http)
$twoSOCKS5 = file_get_contents("https://api.proxyscrape.com/?request=displayproxies&proxytype=socks5&timeout=10000&country=all&anonymity=all&ssl=all");
fwrite($fileSOCKS5, $twoSOCKS5."
");

//######################################


$three = file_get_contents("https://multiproxy.org/txt_all/proxy.txt");  
fwrite($fileHTTP, $three."
");

//##################################################

$four_a = file_get_contents("https://www.sslproxies.org/");
$pattern = '/<div class="modal-body"><textarea class="form-control" readonly="readonly" rows="12" onclick="select\(this\)">([^<]*)/i';
preg_match($pattern, $four_a, $matches);
$dump = $matches[0];
$four = preg_split("/\n\n/i",$dump)[1]; 
fwrite($fileHTTP, $four."
");

//#####################################################


$five_a = file_get_contents("https://proxy-daily.com/");
// $pattern = '/<div class="centeredProxyList freeProxyStyle">([^<]*)/i';
preg_match($pattern, $five_a, $matches);
//---------------(http)
$pattern = '(Free Http/Https Proxy List:</div><br><div class="centeredProxyList freeProxyStyle">([^<]*))';
preg_match($pattern, $five_a, $matches);
$dump = $matches[1];
$fiveHTTP = preg_split('/>/i', $dump)[0];
fwrite($fileHTTP, $fiveHTTP."
");
//---------------(socks4)
$pattern = '(Free Socks4 Proxy List:</div><br><div class="centeredProxyList freeProxyStyle">([^<]*))';
preg_match($pattern, $five_a, $matches);
$dump = $matches[1];
$fiveSOCKS4 = preg_split('/>/i', $dump)[0];
fwrite($fileSOCKS4, $fiveSOCKS4."
");
//---------------(socks5)
$pattern = '(Free Socks5 Proxy List:</div><br><div class="centeredProxyList freeProxyStyle">([^<]*))';
preg_match($pattern, $five_a, $matches);
$dump = $matches[1];
$fiveSOCKS5 = preg_split('/>/i', $dump)[0];
fwrite($fileSOCKS5, $fiveSOCKS5."
");
//##########################################################

$_SOCKS4 = file_get_contents("https://socks-proxy.net/");
$pattern = '(<div class="modal-body"><textarea class="form-control" readonly="readonly" rows="12" onclick="select\(this\)">([^<]*))';
preg_match_all($pattern, $_SOCKS4, $matches);
$dump = $matches[0][0];
preg_match_all('/[\d]+.[\d]+.[\d]+.[\d]+:[\d]+./',$dump, $mes);
$_SOCKS4SOCKS4 = "";
$dump = $mes[0];
for($i=1;$i<count($dump);$i++){
 $_SOCKS4SOCKS4 = $_SOCKS4SOCKS4.$dump[$i]."
";
}
fwrite($fileSOCKS4, $_SOCKS4SOCKS4."
");

//#########################################################

$six_a = file_get_contents("https://free-proxy-list.net/");
$pattern = '/<div class="modal-body"><textarea class="form-control" readonly="readonly" rows="12" onclick="select\(this\)">([^<]*)/i';
preg_match($pattern, $six_a, $matches);
$dump = $matches[0];
$six = preg_split("/\n\n/i",$dump)[1]; 
fwrite($fileHTTP, $six."
");

//#######################################################
$listURL = "https://checkerproxy.net/getAllProxy";
$a = file_get_contents($listURL);
//print_r($a);

preg_match_all('(/archive/[^"]*)', $a, $links);
$aa = $links[0];
//print_r($aa);

$limit = 7; //count($aa); <<============||
//CHANGE FOR MORE PROXIES max value is =\\

for($i=0;$i<$limit;$i++) {
	$url = ("https://checkerproxy.net/api".$aa[$i]);
	getProxies($url);
	fwrite($fileHTTP, $sevenHTTP);
	fwrite($fileSOCKS4, $sevenSOCKS4);


}

function getProxies($url){
global $sevenHTTP;
global $sevenSOCKS4;
$seven_one = file_get_contents($url);
$sevenHTTP = "";
$sevenSOCKS4 = "";
// preg_match_all('/{/i', $one);
$jsonPHP = json_decode($seven_one);
for($i=0;$i<preg_match_all('/{/i', $seven_one);$i++){
	foreach ($jsonPHP[$i] as $key => $value) {
		if($key==="type"){
			if($value===1||$value===2){
				$sevenHTTP = $sevenHTTP.$jsonPHP[$i]->addr."
";
			}
			elseif ($value===4){
				$sevenSOCKS4 = $sevenSOCKS4.$jsonPHP[$i]->addr."
";
			}
		}
	}
}

}


//######################################################
$url = "https://api.openproxy.space/list?skip=0&ts=161425556".mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9);
	// $a = file_get_contents('https://openproxy.space/list');
	$a = file_get_contents($url);
	$jsonPHP = json_decode($a);
	$dummy = '';
	$proxiesSOCKS5 = "";
	$proxiesSOCKS4 = "";
	$proxiesHTTP = "";

	for($i=0;$i<preg_match_all('/{/i', $a);$i++){
	foreach ($jsonPHP[$i] as $key => $value) {
		if($key==="title"){
			if(preg_match('/SOCKS5/i', $value)){
				$dummy = $jsonPHP[$i]->code;
				$url = "https://openproxy.space/list/".$dummy;
				$proxyURL = file_get_contents($url);
				preg_match_all('/[\d]+.[\d]+.[\d]+.[\d]+:[\d]+/i', $proxyURL, $matches);
				foreach ($matches as $found) {
			foreach ($found as $gotcha) {
		$proxiesSOCKS5 = $proxiesSOCKS5.$gotcha."
";
	
			}
											}
 			}
		elseif(preg_match('/SOCKS4/i', $value)) {
							$dummy = $jsonPHP[$i]->code;
				$url = "https://openproxy.space/list/".$dummy;
				$proxyURL = file_get_contents($url);
				preg_match_all('/[\d]+.[\d]+.[\d]+.[\d]+:[\d]+/i', $proxyURL, $matches);
				foreach ($matches as $found) {
			foreach ($found as $gotcha) {
		$proxiesSOCKS4 = $proxiesSOCKS4.$gotcha."
";
	
			}
											}
 			}

		elseif(preg_match("(HTTP/S)i", $value)) {
							$dummy = $jsonPHP[$i]->code;
				$url = "https://openproxy.space/list/".$dummy;
				$proxyURL = file_get_contents($url);
				preg_match_all('/[\d]+.[\d]+.[\d]+.[\d]+:[\d]+/i', $proxyURL, $matches);
				foreach ($matches as $found) {
			foreach ($found as $gotcha) {
		$proxiesHTTP = $proxiesHTTP.$gotcha."
";
	
			}
											}
 			}

		}
		else{
			print_r("ERROR");
		}
	}
		}


fwrite($fileHTTP, $proxiesHTTP."
");
fwrite($fileSOCKS4, $proxiesSOCKS4."
");
fwrite($fileSOCKS5, $proxiesSOCKS5."
");

//#########################################################


 echo "retrieved : SUCCESS ";

?>