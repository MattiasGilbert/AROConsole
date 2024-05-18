<?php

// Get command from URL parameter
$command = $_GET["command"];

// Check for valid commands
if ($command == "help") {
	echo "You have been identified as outside of our organization.";
  echo "<br>As such, you have limited permissions in this system. Your responses will have REDACTIONS. Please log-in on an organization pc for more access.";
	echo "<br>Your permissions are: <strong>CUSTOM</strong>";
	echo "<br><br>help - Get information on all of the terminal commands, within your access permissions.";
	echo "<br>about - Information about the A.R.O.";
  echo "<br>ls - Get the information about the files you have access to.";
	echo "<br>access [file/entry] - Type access and then the file or information you would like to access. If you have permissions to view it, it will appear. (Case Sensitive)";
	echo "<br>clear - Clear the terminal of all information.";
	echo "<br>site-info [site #] - Get the information about the current site you are on or the specified site number. Information is based on access level.";
	echo "<br>research-info [research #] - Get the information about the current research you are assigned to or the specified reasearch number. Information is based on access level.";
	echo "<br><br> Square brackets denote required information. Parentheses denote optional input.";
} 
else if ($command == "about") {
  echo "About the A.R.O. [Arctic Research Organization]";
	echo <<<ARO
		<p>
The A.R.O. is a research organization founded by researcher Shell Lambert in 1843. Research began as of Lambert's discovery of the <strong>Ninth Circle</strong>. This amazing discovery has led to incredible research and strides in the understanding of the fascinating inner working of the planet beneath out very feet. We encourage and fund research exploring the polar wastelands of the planet, as well as reaching out for other phenomena, and have made many interesting discoveries. Though some claim them <strong>paranormal</strong>, we understand better that this is science waiting to be discovered and explained. We live by the great words of our founder as he said "The very ground beneath our feet is gold, so we should choose to purify it with knowledge."</p>
ARO;
}
else if (strpos($command, "access") !== false) {
	$file = explode(" ", $command);

	switch ($file[1]) {
		case "A-234":
			include "entries/A-234.php";
			break;
		case "A-233":
			include "entries/A-233.php";
			break;
		case "DI-024":
			include "entries/DI-024.php";
			break;
		default:
			echo "Insufficient Permissions or Invalid Command";
	}
}
else if ($command == "clear") {
	echo "";
}
else if (strpos($command, "site-info") !== false) {
	$siteEntry = explode(" ", $command);

	switch ($siteEntry[1]) {
		case "000":
			include "entries/site-000.php";
			break;
		case "016":
			include "entries/site-016.php";
			break;
		default:
			echo "Insufficient Permissions or Invalid Command";
	}
}
else if (strpos($command, "research-info") !== false) {
	$researchEntry = explode(" ", $command);

	switch ($researchEntry[1]) {
		case "000":
			include "entries/research-000.php";
			break;
		case "016":
			include "entries/research-016.php";
			break;
		default:
			echo "Insufficient Permissions or Invalid Command";
	}
}
else if (strpos($command, "ls") !== false) {
  echo "Files, as per permissions:";
  echo "<br>Access files with the 'access' command";
  echo "<br>&emsp;&emsp;A-234";
  echo "<br>&emsp;&emsp;A-233";
  echo "<br>&emsp;&emsp;DI-024";
}
else {
  echo "Invalid command";
}
?>