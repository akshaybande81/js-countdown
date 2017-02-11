
<html>
<head>
<title>PHP + jQuery Countdown Timer</title>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="timer.js"></script>


<script>
	$(document).ready(function(){		
		<?php 
		echo 'var timeLeft = 12796000;'; 			
		?>		
		var timer =  new Timer($('#counter'), timeLeft);		
	});
</script>


<style>
div#counter{
	margin: 100px auto;	
	width: 305px;	
	padding:20px;
	border:1px solid #000000;
}
div#counter span{
	background-color: #00CAF6;
	padding:5px;
	margin:1px;
	font-size:30px;
}
</style>

</head>
<body>


<div id="counter">	
	<span class="hour">00</span>
	<span class="min">00</span>
	<span class="sec">00</span>
</div>

</body>
</html>