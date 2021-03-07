<?php require('../header.php');?>
<?php $status = 'Not Started'; ?>
	<center>
		<br><hr>
		<title>PROXYCHECKER | by Abhay</title>
		<h1>PROXYCHECKER</h1>--by OyeTroubleMaker(aka Abhay)<hr><br><br>
		<span style="color: grey;">Tip : The Webpage may not render when processed for CHECK but will work in background</span>
		<form method="POST" name="mainForm" id ="mainForm" autocomplete="off">
			<br>
			<label for="data" id="data_label"></label>
			<textarea name="data" id="data" cols="70" rows="20" required></textarea>
		<br/><br/><input type="submit" name="SubmitButton" value="CHECK" />
		<br>

		</form>
		

<div id="results">
	<?php echo '<span id="status"><i>STATUS: '.$status.'</i></span>'; ?>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#mainForm").validate({
			debug: false,
			rules: {
				data: {
					required: true
				}
			},
			messages: {
				data: "A valid proxies will help us get in touch with you.",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
					$.post('ajax.php', $("#mainForm").serialize(), function(data) {
					$('#results').html(data);
				});
			}
		});
	});
	</script>
	<br><hr><br>
<?php require('../footer.php');?>