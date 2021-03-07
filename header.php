<!DOCTYPE html>
<html>
<head>

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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	
	
<style type="text/css">
	body{
		background: black;
		color: white;
	}
	#loginMsg{
		color:red;
	}
	.live{
		color:green;
	}
	.dead{
		color:red;
	}
	label.error { width: 250px; display: inline; color: red;}
</style>
</head>
<body>
	<center>
		HEADER
		<br><br>
		<a href="<?php $_SERVER["SERVER_NAME"]; ?>" style="color:white;background: black;">HOMEPAGE</a> &nbsp;
		<a href="checker/" style="color:white;background: black;">PROXYCHECKER</a>
	</center>
	<?php 
session_start();
set_time_limit(0);
?>