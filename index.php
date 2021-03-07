<?php require('header.php'); ?>
<!-- // <h2>WELCOME CRACKER Ultra Max</h2> -->

	<center><br><hr>
	<h1>PROXY LEECHER &amp; CHECKER BY ABHAY</h1>
	<hr>
<?php
$loginError = '';
function homepage(){
	global $loginError;
	echo '<title>PROXYSCRAPER | by Abhay</title>
	==============<button style="background: black;color:white;" name="APIDOCS" onclick="myFunction()">API</button>
			<button style="background: black;color:white;" name="HOME" onclick="myFunction2()">LOGIN</button>==============
<div id="myDIV">
<hr><br><br><br>
	<span id="loginMsg">'.$loginError.'</span><br/><br/>
	<form action="" method="post">
	<label for="key">Enter developer Provided Key here : </label><br/>
	<input type="text" name="key" placeholder="Enter Your Key Here" autocomplete="off" />
	<input type="text" name="token" hidden value="testing123"/>
	<input type="submit" value="AUTHENTICATE"/>
	</form>
	<br><br>
</div>
<div id="myAPI" style="display: none;">
<h2>WELCOME CRACKER</h2><hr><br>
	PUBLIC ACCESS KEY : test123<br>';
	$key = '<span id="keyinAPI">{KEY}</span>';
	$apiTEXT = '<br><br>Your API URL is Below :<br><br>
	<br><br>HTTP/S API :<br>'.$_SERVER["SERVER_NAME"].'/fetchProxy/?key='.$key.'&proxyType=http';
	$apiTEXT2 = '<br><br>SOCKS4 API :<br>'.$_SERVER["SERVER_NAME"].'/fetchProxy/?key='.$key.'&proxyType=socks4';
	$apiTEXT3 = '<br><br>SOCKS5 API :<br>'.$_SERVER["SERVER_NAME"].'/fetchProxy/?key='.$key.'&proxyType=socks5';
	echo $apiTEXT.$apiTEXT2.$apiTEXT3.'<br/>';

	echo '</div>
	<br><hr></center>
	<!-- FOOTER -->
	<br>
	<center>
	FOOTER
	<br><br>
	<a href="https://t.me/technicaltitan" style="color:white;background: black;">CONTACT ME ON TG</a>
	&nbsp;
	<a href="https://github.com/abhaygupta08/proxyleecherPHP" style="color:white;background: black;" title="DON\'T FORGET TO DROP STAR">SOURCE CODE</a>
	</center>
	<!-- FOOTER ENDS -->
	';
}
function dashboard(){
	@$key = $fixedPASS;
	echo '
	<title>DASHBOARD PROXYSCRAPER | by Abhay</title>
<h2>WELCOME '.$_SESSION['session'].' (PUBLIC KEY ACCESS)</h2>
	<form action="" method="get" id="logout">
	<button type="submit" name="logout" style="background: black;color:white;">LOGOUT</button>
	</form><br/>
	<hr>
	<!-- DASHOBOARD -->
	<center>
	';
	$apiTEXT = '<br><br>Your API URL is Below :<br><br>
	<br><br>HTTP/S API :<br>'.$_SERVER["SERVER_NAME"].'/fetchProxy/?key='.$key.'&proxyType=http';
	$apiTEXT2 = '<br><br>SOCKS4 API :<br>'.$_SERVER["SERVER_NAME"].'/fetchProxy/?key='.$key.'&proxyType=socks4';
	$apiTEXT3 = '<br><br>SOCKS5 API :<br>'.$_SERVER["SERVER_NAME"].'/fetchProxy/?key='.$key.'&proxyType=socks5';
	echo $apiTEXT.$apiTEXT2.$apiTEXT3.'<br/>';

		if($_SERVER["SERVER_NAME"]==="localhost"){
	echo '<br/><center>FOR LOCALHOST : http://localhost/php_learn/20feb/fetchProxy/?key='.$key.'&proxyType=socks5</center>';
	}
	echo '<br/><br/><hr><br/>';
}

@$passwordlogin = $_POST['key'];
@$token = $_POST['token'];
$fixedPASS = "test123";
//logout function
@$logout = $_GET['logout'];
if(isset($_GET['logout'])){ 
    session_destroy();
    if($_SERVER["HTTP_HOST"] == "localhost"){
    header("Location: index.php"); //Redirect the user
    }
    else
    	header("Location: index.php");
}
//logout ends

//login fxn
	if($passwordlogin == $fixedPASS && $token == 'testing123')
		{$_SESSION['session'] = "$fixedPASS";}
	elseif ($passwordlogin == "") {echo '';}
	else{$loginError = 'Invalid Login :(';}	
 if(!isset($_SESSION['session']) or $_SESSION['session'] != $fixedPASS)
 {
	die(homepage());
 }
 //to be shown if login is OK
dashboard();


?>
</center>
<?php require('footer.php'); ?>
