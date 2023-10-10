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
                <li>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="as-point1">
                	<label for="as-point1">Hardware Check</label>
            	    </div>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="as-point2">
                	<label for="as-point2">Sandbox Files Check</label>
            	    </div>
        	</li>
        	<li>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="as-point3">
                	<label for="as-point3">Check Services</label>
            	    </div>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="as-point4">
                	<label for="as-point4">Check Active Processes</label>
            	    </div>
        	</li>
                <li>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="as-point5">
                	<label for="as-point5">Check MAC Address</label>
            	    </div>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="as-point6">
                	<label for="as-point6">Check Domain</label>
            	    </div>
        	</li>
        	<li>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="as-point7">
                	<label for="as-point7">Check Loaded DLLs</label>
            	    </div>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="as-point8">
                	<label for="as-point8">Check Registry Keys</label>
            	    </div>
        	</li>
            </ul>
	    <span class="see-more" onclick="openPopup('popupAntiSandbox')"><u>See More</u></span>
        </div>
        <div class="col-50">
            <!-- Anti Debug Config -->
	    <h6>Anti Debug Config</h6>
            <ul class="points-list">
                <li>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="ad-point1">
                	<label for="ad-point1">Debug Flag Check</label>
            	    </div>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="ad-point2">
                	<label for="ad-point2">Object Handel Check</label>
            	    </div>
        	</li>
        	<li>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="ad-point3">
                	<label for="ad-point3">Exceptions Check</label>
            	    </div>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="ad-point4">
                	<label for="ad-point4">Timing Check</label>
            	    </div>
        	</li>
        	<li>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="ad-point5">
                	<label for="ad-point5">Process Memory Check</label>
            	    </div>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="ad-point6">
                	<label for="ad-point6">Behavior Check</label>
            	    </div>
        	</li>
        	<li>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="ad-point7">
                	<label for="ad-point7">ThreadHideFromDebugger (0x11)</label>
            	    </div>
            	    <div class="checkbox-column">
                	<input type="checkbox" id="ad-point8">
                	<label for="ad-point8">Self Debug</label>
            	    </div>
        	</li>
            </ul>
            <div class="see-more" onclick="openPopup('popupAntiSandbox')"><u>See More</u></div>
        </div>
    </div>
    <div class="row">
        <div class="col-100">
            <!-- Network Protocol and Encryption Menu -->
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
		    <span class="see-more" onclick="openPopup('popupMainOptions')"><u>See More</u></span>
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
		    <span class="see-more" onclick="openPopup('popupInternalEnum')"><u>See More</u></span>
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
		    <span class="see-more" onclick="openPopup('popupCredentials')"><u>See More</u></span>
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
		    <span class="see-more" onclick="openPopup('popupSpyOperations')"><u>See More</u></span>
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
		    <span class="see-more" onclick="openPopup('popupBrowserAO')"><u>See More</u></span>
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
		    <span class="see-more" onclick="openPopup('popupExtraOptions')"><u>See More</u></span>
            	</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-100">
            <!-- Payload Builder -->
	    <h6>Payload Builder</h6>
	    <div class="symbol-gallery">
            <div class="symbol">
                <img src="/pic/exe.png" alt="Symbol 1" width="50" height="50" onclick="showSettings('Symbol 1 Settings')">
                <p>EXE</p>
            </div>
            <div class="symbol">
                <img src="/pic/dll.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>DLL</p>
            </div>
	    <div class="symbol">
                <img src="/pic/bin.png" alt="Symbol 3" width="50" height="50" onclick="showSettings('Symbol 1 Settings')">
                <p>BIN</p>
            </div>
            <div class="symbol">
                <img src="/pic/sys.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>SYS</p>
            </div>
            <div class="symbol">
                <img src="/pic/msi.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>MSI</p>
            </div>
            <div class="symbol">
                <img src="/pic/msp.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>MSP</p>
            </div>
            <div class="symbol">
                <img src="/pic/pcx.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>PCX</p>
            </div>
            <div class="symbol">
                <img src="/pic/doc.png" alt="Symbol 4" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>DOC</p>
            </div>
            <div class="symbol">
                <img src="/pic/docx.png" alt="Symbol 1" width="50" height="50" onclick="showSettings('Symbol 1 Settings')">
                <p>DOCX</p>
            </div>
            <div class="symbol">
                <img src="/pic/powerpoint.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>PPX</p>
            </div>
            <div class="symbol">
                <img src="/pic/excel.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>EXCEL</p>
            </div>
	    <div class="symbol">
                <img src="/pic/rar.png" alt="Symbol 3" width="50" height="50" onclick="showSettings('Symbol 1 Settings')">
                <p>RAR</p>
            </div>
            <div class="symbol">
                <img src="/pic/zip.png" alt="Symbol 4" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>ZIP</p>
            </div>
            <div class="symbol">
                <img src="/pic/7z.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>7Z</p>
            </div>
            <div class="symbol">
                <img src="/pic/pdf.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>PDF</p>
            </div>
            <div class="symbol">
                <img src="/pic/webp.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>WEBP</p>
            </div>
            <div class="symbol">
                <img src="/pic/ae.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>AE</p>
            </div>
            <div class="symbol">
                <img src="/pic/psd.png" alt="Symbol 2" width="50" height="50" onclick="showSettings('Symbol 2 Settings')">
                <p>PSD</p>
            </div>
        </div>
        <!-- Settings for the selected symbol -->
        <div id="settingsPanel" class="settings-panel">
            <h6>Settings</h6>
            <div id="symbolSettings"></div>
        </div>
        </div>
    </div>
    <div class="bottom-bar">
        <input type="text" placeholder="Eingabe">
        <button>Button 1</button>
        <button>Button 2</button>
        <button>Button 3</button>
    </div>
</div>


<div class="popup-menu-overlay" id="popupAntiSandbox">
    <div class="popup-menu">
        <!-- Anti Sandbox Config -->
        <h6>Anti Sandbox Config</h6>
        <ul class="points-list">
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point1">
                    <label for="as-point1">Hardware Check</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point2">
                    <label for="as-point2">Sandbox Files Check</label>
                </div>
            </li>
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point7">
                    <label for="as-point7">Check Loaded DLLs</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point8">
                    <label for="as-point8">Check Registry Keys</label>
                </div>
            </li>
        </ul>
        <div class="popup-menu-buttons">
            <button onclick="closePopup('popupAntiSandbox')">Cancel</button>
            <button>Save</button>
        </div>
        <span class="close-popup-button" onclick="closePopup('popupAntiSandbox')">X</span>
    </div>
</div>


<div class="popup-menu-overlay" id="popupAntiDebug">
    <div class="popup-menu">
        <!-- Anti Sandbox Config -->
        <h6>Anti Sandbox Config</h6>
        <ul class="points-list">
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point1">
                    <label for="as-point1">Hardware Check</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point2">
                    <label for="as-point2">Sandbox Files Check</label>
                </div>
            </li>
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point7">
                    <label for="as-point7">Check Loaded DLLs</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point8">
                    <label for="as-point8">Check Registry Keys</label>
                </div>
            </li>
        </ul>
        <div class="popup-menu-buttons">
            <button onclick="closePopup('popupAntiDebug')">Cancel</button>
            <button>Save</button>
        </div>
        <span class="close-popup-button" onclick="closePopup('popupAntiDebug')">X</span>
    </div>
</div>


<div class="popup-menu-overlay" id="popupMainOptions">
    <div class="popup-menu">
        <!-- Anti Sandbox Config -->
        <h6>Anti Sandbox Config</h6>
        <ul class="points-list">
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point1">
                    <label for="as-point1">Hardware Check</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point2">
                    <label for="as-point2">Sandbox Files Check</label>
                </div>
            </li>
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point7">
                    <label for="as-point7">Check Loaded DLLs</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point8">
                    <label for="as-point8">Check Registry Keys</label>
                </div>
            </li>
        </ul>
        <div class="popup-menu-buttons">
            <button onclick="closePopup('popupMainOptions')">Cancel</button>
            <button>Save</button>
        </div>
        <span class="close-popup-button" onclick="closePopup('popupMainOptions')">X</span>
    </div>
</div>


<div class="popup-menu-overlay" id="popupInternalEnum">
    <div class="popup-menu">
        <!-- Anti Sandbox Config -->
        <h6>Anti Sandbox Config</h6>
        <ul class="points-list">
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point1">
                    <label for="as-point1">Hardware Check</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point2">
                    <label for="as-point2">Sandbox Files Check</label>
                </div>
            </li>
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point7">
                    <label for="as-point7">Check Loaded DLLs</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point8">
                    <label for="as-point8">Check Registry Keys</label>
                </div>
            </li>
        </ul>
        <div class="popup-menu-buttons">
            <button onclick="closePopup('popupInternalEnum')">Cancel</button>
            <button>Save</button>
        </div>
        <span class="close-popup-button" onclick="closePopup('popupInternalEnum')">X</span>
    </div>
</div>


<div class="popup-menu-overlay" id="popupCredentials">
    <div class="popup-menu">
        <!-- Anti Sandbox Config -->
        <h6>Anti Sandbox Config</h6>
        <ul class="points-list">
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point1">
                    <label for="as-point1">Hardware Check</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point2">
                    <label for="as-point2">Sandbox Files Check</label>
                </div>
            </li>
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point7">
                    <label for="as-point7">Check Loaded DLLs</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point8">
                    <label for="as-point8">Check Registry Keys</label>
                </div>
            </li>
        </ul>
        <div class="popup-menu-buttons">
            <button onclick="closePopup('popupCredentials')">Cancel</button>
            <button>Save</button>
        </div>
        <span class="close-popup-button" onclick="closePopup('popupCredentials')">X</span>
    </div>
</div>


<div class="popup-menu-overlay" id="popupSpyOperations">
    <div class="popup-menu">
        <!-- Anti Sandbox Config -->
        <h6>Anti Sandbox Config</h6>
        <ul class="points-list">
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point1">
                    <label for="as-point1">Hardware Check</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point2">
                    <label for="as-point2">Sandbox Files Check</label>
                </div>
            </li>
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point7">
                    <label for="as-point7">Check Loaded DLLs</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point8">
                    <label for="as-point8">Check Registry Keys</label>
                </div>
            </li>
        </ul>
        <div class="popup-menu-buttons">
            <button onclick="closePopup('popupSpyOperations')">Cancel</button>
            <button>Save</button>
        </div>
        <span class="close-popup-button" onclick="closePopup('popupSpyOperations')">X</span>
    </div>
</div>


<div class="popup-menu-overlay" id="popupBrowserAO">
    <div class="popup-menu">
        <!-- Anti Sandbox Config -->
        <h6>Anti Sandbox Config</h6>
        <ul class="points-list">
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point1">
                    <label for="as-point1">Hardware Check</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point2">
                    <label for="as-point2">Sandbox Files Check</label>
                </div>
            </li>
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point7">
                    <label for="as-point7">Check Loaded DLLs</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point8">
                    <label for="as-point8">Check Registry Keys</label>
                </div>
            </li>
        </ul>
        <div class="popup-menu-buttons">
            <button onclick="closePopup('popupBrowserAO')">Cancel</button>
            <button>Save</button>
        </div>
        <span class="close-popup-button" onclick="closePopup('popupBrowserAO')">X</span>
    </div>
</div>


<div class="popup-menu-overlay" id="popupExtraOptions">
    <div class="popup-menu">
        <!-- Anti Sandbox Config -->
        <h6>Anti Sandbox Config</h6>
        <ul class="points-list">
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point1">
                    <label for="as-point1">Hardware Check</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point2">
                    <label for="as-point2">Sandbox Files Check</label>
                </div>
            </li>
            <li>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point7">
                    <label for="as-point7">Check Loaded DLLs</label>
                </div>
                <div class="checkbox-column">
                    <input type="checkbox" id="as-point8">
                    <label for="as-point8">Check Registry Keys</label>
                </div>
            </li>
        </ul>
        <div class="popup-menu-buttons">
            <button onclick="closePopup('popupExtraOptions')">Cancel</button>
            <button>Save</button>
        </div>
        <span class="close-popup-button" onclick="closePopup('popupExtraOptions')">X</span>
    </div>
</div>
