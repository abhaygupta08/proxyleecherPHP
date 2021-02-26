<!DOCTYPE html>
<html>
<head>
	<title>PROXYLEECHER | OYETROUBLEMAKER | ABHAY</title>
</head>
<body align="center">
	HEADER 	<br><br><hr>
	<h1>PROXY LEECHER BY ABHAY</h1>
	<hr>
	
		<!-- <form action="" method="post"> -->
			<button style="background: black;color:white;" name="APIDOCS" onclick="myFunction()">API</button>
			<button style="background: black;color:white;" name="HOME" onclick="myFunction2()">LOGIN</button>
		<!-- </form> -->

<div id="myDIV">
<h2>WELCOME CRACKER Ultra Max</h2><hr>
<br><br><br>
	<form action="dashboard.php" method="post">
	<input type="text" name="key" placeholder="Enter Your Key Here" />
	<input type="text" name="token" hidden value="testing123"/>
	<input type="submit" value="AUTHENTICATE"/>
	</form>
	<br><br>
</div>
<div id="myAPI" style="display: none;">
<h2>WELCOME CRACKER Ultra Max</h2><hr>
<br>
	PUBLIC ACCESS KEY : test123
	<br><br>
	<?php
	$key = '<span style="color:red">{KEY}</span>';
	echo "<br><br>DIRECT API URL :<br>";
	print_r($key);
	echo "<br><br>HTTP/S API :<br>";
	print_r($_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=http");
	echo "<br>";
	
	echo "<br><br>SOCKS4 API :<br>";
	print_r($_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=socks4");
	echo "<br>";
	
	echo "<br><br>SOCKS5 API :<br>";
	print_r($_SERVER['SERVER_NAME']."/fetchProxy/?key=".$key."&proxyType=socks5");
	echo "<br><br>";
	echo '<span style="color:blue;">Replace '.$key.'with your key.</span>';
	?>
</div>


<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myDIV");
    x.style.display = "none";
  var y = document.getElementById("myAPI");
  	y.style.display = "block";
}

function myFunction2() {
  var x = document.getElementById("myAPI");
    x.style.display = "none";
  var y = document.getElementById("myDIV");
  	y.style.display = "block";
}
</script>
<?php
// if(isset($_POST['APIDOCS'])){
// 	$homepage="";
// 	$apiDocs = "HELO THERE !!!";	
// }

?>	
	<br><hr>
	FOOTER
	<br><br>
	<a href="https://t.me/technicaltitan" style="color:white;background: black;">CONTACT ME ON TG</a>
	&nbsp;
	<a href="https://github.com/abhaygupta08/proxyleecherPHP" style="color:white;background: black;" title="DON'T FORGET TO DROP STAR">SOURCE CODE</a>
</body>
</html>
