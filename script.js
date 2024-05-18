const terminalInput = document.getElementById("terminal-input");
const terminalOutput = document.getElementById("terminal-output");

function loadEntry(cmd, entry) {
  console.log("Loading entry: " + entry);
  switch (cmd) {
    case "access":
      access(entry);
      break;
    case "site-info":
      siteInfo(entry);
      break;
    case "research-info":
      researchInfo(entry);
      break;
  }
}

function access(entry) {
  console.log("Accessing...")
  switch (entry) {
    case "A-234":
      $(terminalOutput).load("command_data/entries/A-234.html");
      break;
    case "A-233":
      $(terminalOutput).load("command_data/entries/A-233.html");
      break;
    case "DI-024":
      $(terminalOutput).html("<img src='images/s016_A_234.jpg'>");
      break;
    default:
      $(terminalOutput).html("Entry not found or lack of credentials.");
      break;
  }
}

function siteInfo(site) {
  console.log("Site Info: " + site);
  switch (site) {
    case "000":
      $(terminalOutput).load("command_data/entries/site-000.html");
      break;
    case "016":
      $(terminalOutput).load("command_data/entries/site-016.html");
      break;
    default:
      $(terminalOutput).html("Site not found or lack of credentials.");
      break;
  }
}

function researchInfo(research) {
  console.log("Research Entry: " + research);
  switch (research) {
    case "000":
      $(terminalOutput).load("command_data/entries/research-000.html");
      break;
    case "016":
      $(terminalOutput).load("command_data/entries/research-016.html");
      break;
    default:
      $(terminalOutput).html("Research not found or lack of credentials.");
      break;
  }
}

// Parse commands and send errors/correct output
function parseCommand(cmd) {
  let command = cmd.split(" ");
  
  terminalInput.value = ""
  
  switch (command[0]) {
    case "help":
      $(terminalOutput).load("command_data/help.html");
      break;
    case "clear":
      $(terminalOutput).html("");
      break;
    case "about":
      $(terminalOutput).load("command_data/about.html");
      break;
    case "ls":
      $(terminalOutput).load("command_data/ls.html");
      break;
    case "changelog":
      $(terminalOutput).load("command_data/changelog.html");
      break;
    case "access":
      loadEntry(command[0], command[1]);
      break;
    case "site-info":
      loadEntry(command[0], command[1]);
      break;
    case "research-info":
      loadEntry(command[0], command[1]);
      break;
    default:
      $(terminalOutput).html("Invalid command");
      break;
  }
}

// Function to handle user input
terminalInput.addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    console.log('Running Command...');
    parseCommand(terminalInput.value)
  }
});