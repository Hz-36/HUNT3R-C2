<div class="left-pane">
    <div class="xlisten-container">
    	<div class="xlisten-left">
            <h3>Listener Configuration</h3>
            <input type="text" placeholder="Port">
            <select>
            	<option value="none">None</option>
            	<option value="aes">AES</option>
            	<option value="base64">Base64</option>
            	<option value="url">URL</option>
            </select>
            <button id="startListenerButton">Start Listener</button>
            <div class="progress-bar">
            	<div class="progress"></div>
            </div>
            <div class="status-text">Listener not started.</div>
    	</div>
    	<div class="xlisten-right">
    	    <h3>Shellcode Builder</h3>
    	    <input type="text" id="portInput" placeholder="Port">
    	    <div class="menu">
            	<a href="#" onclick="displayCode('bash-i')">bash -i</a>
            	<a href="#" onclick="displayCode('bash196')">bash 196</a>
            	<!-- Add more menu items as needed -->
    	    </div>
    	    <div class="code-display">
            	<!-- Code for selected menu item will appear here -->
    	    </div>
    	</div>
    </div>
</div>