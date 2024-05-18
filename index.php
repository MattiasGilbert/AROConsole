<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Terminal</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

	<!-- 
		Hello. If you are seeing this, terminal or message, understand that you are witnessing a mistake.
		A mistake I feel obligated to make.
		We are being executed. Take this access with a grain of salt, getting you this much was hard enough.
		Further access will be given in the future... It'll just take a while.
	-->
	
	<div id="header">
		<span id="title">Arctic Research Organization</span>
	</div>

	<div id="terminal-container">
		<div id="terminal-header">
			<span id="terminal-title">Classified Terminal</span>
		</div>
		<div id="terminal-body">
			<div id="terminal-output"></div>
			<div id="terminal-input-container">
				<span>$</span>
				<input type="text" id="terminal-input" autofocus autocomplete="off">
			</div>
		</div>
	</div>

	<script src="script.js"></script>
</body>

</html>