<?php
$sid = $_GET['sid'];
?>
        <div class="right-pane">
    	    <h2>XSHELL</h2>
    	    <div class="shellbody">
        	<div class="shell" id="shell-output">
            	     <!-- Hier wird die Shell-Ausgabe angezeigt -->
        	</div>
            <div class="input">
            	<input type="text" id="command-input" placeholder="Enter your command">
            	<button id="execute-button">Execute</button>
            </div>
        </div>
	<script>
	// Funktion, um die SID aus dem DOM zu extrahieren
    	function extractSID() {
    	    const url = window.location.href;
    	    const regex = /sid=(\d+)/; // Annahme: Die SID ist eine Zahl
    	    const match = url.match(regex);
     	   return match ? match[1] : null; // Gibt die SID zurück oder null, wenn keine SID gefunden wurde
    	}

    	// AJAX-Request, um den Port zu bekommen
    	function getPort() {
    	    const sid = extractSID();
     	   if (!sid) {
     	       console.error('SID not found.');
     	       return;
     	   }

      	  const xhr = new XMLHttpRequest();
      	  //xhr.open('GET', `http://localhost:4444//xSHELL_CLIENTx/${sid}`);
      	  xhr.open('GET', `http://localhost:4444//xSLIENTx/${sid}`);
     	  xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const port = parseInt(xhr.responseText);
                    startWebSocket(port);
                } else {
                    console.error('Failed to get port.');
                }
       	     }
        };
        xhr.send();
    }

    // WebSocket-Verbindung starten
    function startWebSocket(port) {
        //const socket = new WebSocket(`ws://127.0.0.1:${port}`);
        const socket = new WebSocket('127.0.0.1:1202');

        // Wenn die Verbindung geöffnet ist
        socket.addEventListener('open', (event) => {
            // Eventuell Authentifizierung hier durchführen

            // Wenn der "Execute"-Button geklickt wird
            document.getElementById('execute-button').addEventListener('click', () => {
                const commandInput = document.getElementById('command-input');
                const command = commandInput.value;

    	           // Sende den Befehl an den C++-Server
    	           socket.send(command);
	
    	           // Lösche das Eingabefeld
     	           commandInput.value = '';
     	       });

     	       // Wenn Daten vom Server empfangen werden
     	       socket.addEventListener('message', (event) => {
      	           const shellOutput = document.getElementById('shell-output');
    	           const outputLine = document.createElement('pre');
    	           outputLine.textContent = event.data;

      	          // Füge die Server-Antwort zur Shell-Ausgabe hinzu
      	          shellOutput.appendChild(outputLine);
     	       });
     	   });
    	</script>		
        </div>
<script type="text/javascript" src="/js/script.js" defer></script>
<script type="text/javascript" src="/js/xscript.js" defer></script>
<script type="text/javascript" src="/js/client_interval.js" defer></script>