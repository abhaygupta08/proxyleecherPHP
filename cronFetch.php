<?php
header('Content-Type: text/plain');
$myfile = fopen("proxy.txt", "w") or die("Unable to open file!");


$one = file_get_contents("https://www.proxy-list.download/api/v1/get?type=http");  
fwrite($myfile, $one."
");


$two = file_get_contents("https://api.proxyscrape.com/?request=displayproxies&proxytype=http&timeout=10000&country=all&anonymity=all&ssl=all");
fwrite($myfile, $two."
");

$three = file_get_contents("https://multiproxy.org/txt_all/proxy.txt");  
fwrite($myfile, $three."
");

$four_a = file_get_contents("https://www.sslproxies.org/");
$pattern = '/<div class="modal-body"><textarea class="form-control" readonly="readonly" rows="12" onclick="select\(this\)">([^<]*)/i';
preg_match($pattern, $four_a, $matches);
$dump = $matches[0];
$four = preg_split("/\n\n/i",$dump)[1]; 
fwrite($myfile, $four."
");

$five_a = file_get_contents("https://proxy-daily.com/");
$pattern = '/<div class="centeredProxyList freeProxyStyle">([^<]*)/i';
preg_match($pattern, $five_a, $matches);
$dump = $matches[0];
$five = preg_split('/>/i', $dump)[1];
fwrite($myfile, $five."
");

$six_a = file_get_contents("https://free-proxy-list.net/");
$pattern = '/<div class="modal-body"><textarea class="form-control" readonly="readonly" rows="12" onclick="select\(this\)">([^<]*)/i';
preg_match($pattern, $six_a, $matches);
$dump = $matches[0];
$six = preg_split("/\n\n/i",$dump)[1]; 
fwrite($myfile, $six."
");

$seven_one = file_get_contents("https://checkerproxy.net/api/archive/2021-02-22");
$seven = "";
// preg_match_all('/{/i', $one);
$jsonPHP = json_decode($seven_one);
for($i=0;$i<preg_match_all('/{/i', $seven_one);$i++){
	foreach ($jsonPHP[$i] as $key => $value) {
		if($key==="type"){
			if($value===1||$value===2){
				$seven = $seven.$jsonPHP[$i]->addr."
";
			}
		}
	}
}
fwrite($myfile, $seven);


 echo "retrieved : SUCCESS ";

?>