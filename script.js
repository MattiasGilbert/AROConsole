const terminalInput = document.getElementById("terminal-input");
const terminalOutput = document.getElementById("terminal-output");

terminalInput.addEventListener("keydown", function(event) {
	if (event.key === "Enter") {
		const command = terminalInput.value.trim();
		terminalInput.value = "";
		terminalOutput.innerHTML += "<p>$ " + command + "</p>";

		$.ajax({
			method: 'GET',
			url: 'script.php',
			data: {command:command},
			success: function() {
      	console.log("message sent!");
   		}
		}).done(function( response ) {
			console.log(response)
    	$("#terminal-output").html(response);
  	});
		
	}
});