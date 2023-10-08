<div class="right-pane">
    <div class="headerbuilder">
        <h2>XBUILDER</h2>
        <div class="tabsbuilder">
            <button class="tabbuilder">Builder</button>
            <button class="tabbuilder">Include Code</button>
            <button class="tabbuilder">Advanced Builder</button>
        </div>
    </div>
    <div class="row">
    	<div class="col-50">
            <!-- Anti Sandbox Config -->
	    <h6>Anti Sandbox Config</h6>
            <ul class="points-list">
                <li><input type="checkbox" id="as-point1"><label for="as-point1">Registry Check</label></li>
                <li><input type="checkbox" id="as-point2"><label for="as-point2">DLL Check</label></li>
                <li><input type="checkbox" id="as-point3"><label for="as-point3">Process Check</label></li>
                <li><input type="checkbox" id="as-point4"><label for="as-point4">Network Adapter Check</label></li>
            </ul>
        </div>
        <div class="col-50">
            <!-- Anti Debug Config -->
	    <h6>Anti Debug Config</h6>
            <ul class="points-list">
                <li><input type="checkbox" id="ad-point1"><label for="ad-point1">Anti Debug Check</label></li>
                <li><input type="checkbox" id="ad-point2"><label for="ad-point2">Wine Check</label></li>
                <li><input type="checkbox" id="ad-point3"><label for="ad-point3">Hyperx Check</label></li>
                <li><input type="checkbox" id="ad-point4"><label for="ad-point4">Import Debugger Check</label></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-100">
            <!-- Payload Protocol and Encryption Menu -->
            <div class="payload-settings-wrapper">
	    <div class="payload-settings-columnx">
        	<h6>Network Protocol</h6>
        	<div class="scrollable-list">
            	    <ul class="points-list">
                        <li><label><input type="radio" name="network-protocol" value="TCP"> TCP</label></li>
                	<li><label><input type="radio" name="network-protocol" value="UDP"> UDP</label></li>
                	<li><label><input type="radio" name="network-protocol" value="HTTP"> HTTP</label></li>
            	    </ul>
        	</div>
            </div>
    	    <div class="payload-settings-columnx">
        	<h6>Encryption</h6>
        	<div class="scrollable-list">
            	    <ul class="points-list">
                	<li><label><input type="radio" name="encryption" value="AES"> AES</label></li>
                	<li><label><input type="radio" name="encryption" value="RSA"> RSA</label></li>
                	<li><label><input type="radio" name="encryption" value="SHA-256"> SHA-256</label></li>
           	    </ul>
        	</div>
            </div>
	    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-100">
            <!-- Functions & Addons -->
	    <div class="payload-settings-container">
            	<div class="payload-settings-column">
                    <h6>Main Options</h6>
                    <ul class="points-list">
                    	<li><input type="checkbox" id="opt1-point1"><label for="opt1-point1">Shell</label></li>
                    	<li><input type="checkbox" id="opt1-point2"><label for="opt1-point2">Stager</label></li>
                    	<li><input type="checkbox" id="opt1-point3"><label for="opt1-point3">Live Modules</label></li>
                    	<li><input type="checkbox" id="opt1-point4"><label for="opt1-point4">File Explorer</label></li>
                    	<li><input type="checkbox" id="opt1-point5"><label for="opt1-point5">Proxy Tunel</label></li>  
                    </ul>
		    <span class="see-more" onclick="openPopup('main-options-popup')"><u>See More</u></span>
            	</div>
            	<div class="payload-settings-column">
                    <h6>Internal Enumeration</h6>
                    <ul class="points-list">
                    	<li><input type="checkbox" id="opt2-point1"><label for="opt2-point1">System & Hardware Enumeration</label></li>
                    	<li><input type="checkbox" id="opt2-point2"><label for="opt2-point2">Process Enumeration</label></li>
                    	<li><input type="checkbox" id="opt2-point3"><label for="opt2-point3">User Enumeration</label></li>
                    	<li><input type="checkbox" id="opt2-point4"><label for="opt2-point4">Network Enumeration</label></li>
                    	<li><input type="checkbox" id="opt2-point5"><label for="opt2-point5">Device Enumeration</label></li>   
                    </ul>
		    <span class="see-more" onclick="openPopup('internal-enum-popup')"><u>See More</u></span>
            	</div>
                <div class="payload-settings-column">
                    <h6>Logins & Passwords</h6>
                    <ul class="points-list">
                    	<li><input type="checkbox" id="opt3-point1"><label for="opt3-point1">Windows Logins</label></li>
                    	<li><input type="checkbox" id="opt3-point2"><label for="opt3-point2">Browser Logins</label></li>
                    	<li><input type="checkbox" id="opt3-point3"><label for="opt3-point3">NTLM / NTLMv2</label></li>
                    	<li><input type="checkbox" id="opt3-point4"><label for="opt3-point4">Search for Logins</label></li>
                    	<li><input type="checkbox" id="opt3-point5"><label for="opt3-point5">Search for Keys</label></li>  
                    </ul>
		    <span class="see-more" onclick="openPopup('logins-passwords-popup')"><u>See More</u></span>
            	</div>
            	<div class="payload-settings-column">
                    <h6>Spy Operations</h6>
                    <ul class="points-list">
                    	<li><input type="checkbox" id="opt4-point1"><label for="opt4-point1">Keylogger</label></li>
                    	<li><input type="checkbox" id="opt4-point2"><label for="opt4-point2">Browser History</label></li>
                    	<li><input type="checkbox" id="opt4-point3"><label for="opt4-point3">Browser Cookies</label></li>
                    	<li><input type="checkbox" id="opt4-point4"><label for="opt4-point4">Browser Live Traffic</label></li>
                    	<li><input type="checkbox" id="opt4-point5"><label for="opt4-point5">Mail & Messenger Spy</label></li>  
                    </ul>
		    <span class="see-more" onclick="openPopup('spy-operations-popup')"><u>See More</u></span>
            	</div>
            	<div class="payload-settings-column">
                    <h6>Browser Addons</h6>
                    <ul class="points-list">
                    	<li><input type="checkbox" id="opt5-point1"><label for="opt5-point1">Firefox Addon</label></li>
                    	<li><input type="checkbox" id="opt5-point2"><label for="opt5-point2">Chrome Addon</label></li>
                    	<li><input type="checkbox" id="opt5-point3"><label for="opt5-point3">Opera Addon</label></li>
                    	<li><input type="checkbox" id="opt5-point4"><label for="opt5-point4">Edge Addon</label></li>
                    	<li><input type="checkbox" id="opt5-point5"><label for="opt5-point5">Internet Explorer Addon</label></li>  
                    </ul>
		    <span class="see-more" onclick="openPopup('browser-addons-popup')"><u>See More</u></span>
            	</div>
            	<div class="payload-settings-column">
                    <h6>Other Extras</h6>
                    <ul class="points-list">
                    	<li><input type="checkbox" id="opt6-point1"><label for="opt6-point1">Screenshot</label></li>
                    	<li><input type="checkbox" id="opt6-point2"><label for="opt6-point2">Fake Promt & Login</label></li>
                    	<li><input type="checkbox" id="opt6-point3"><label for="opt6-point3">Encrypter</label></li>
                    	<li><input type="checkbox" id="opt6-point4"><label for="opt6-point4">Voice Recorder</label></li>
                    	<li><input type="checkbox" id="opt6-point5"><label for="opt6-point5">Cam View</label></li>  
                    </ul>
		    <span class="see-more" onclick="openPopup('extra-options-popup')"><u>See More</u></span>
            	</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-100">
            <!-- Payload Builder -->
	    <h6>Payload Builder</h6>
        </div>
    </div>
    <div class="bottom-bar">
        <input type="text" placeholder="Eingabe">
        <button>Button 1</button>
        <button>Button 2</button>
        <button>Button 3</button>
    </div>
</div>