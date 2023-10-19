<div class="left-pane">
    <div class="headerbuilder">
        <h3>XBUILDER</h3><br>
        <div class="tabsbuilder">
            <button class="tabbuilder">Builder</button>
            <button class="tabbuilder">Include Code</button>
            <button class="tabbuilder">Advanced Builder</button>
        </div>
    </div>
    <div class="buildermain-pane">
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
                    <img src="/pic/exe.png" alt="EXE" width="50" height="50" onclick="showSettings('EXE')">
                    <p>EXE</p>
                </div>
                <div class="symbol">
                     <img src="/pic/dll.png" alt="DLL" width="50" height="50" onclick="showSettings('DLL')">
                     <p>DLL</p>
            	</div>
	    	<div class="symbol">
                    <img src="/pic/bin.png" alt="BIN" width="50" height="50" onclick="showSettings('BIN')">
                    <p>BIN</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/sys.png" alt="SYS" width="50" height="50" onclick="showSettings('SYS')">
                    <p>SYS</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/msi.png" alt="MSI" width="50" height="50" onclick="showSettings('MSI')">
                    <p>MSI</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/msp.png" alt="MSP" width="50" height="50" onclick="showSettings('MSP')">
                    <p>MSP</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/pcx.png" alt="PCX" width="50" height="50" onclick="showSettings('PCX')">
                    <p>PCX</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/doc.png" alt="DOC" width="50" height="50" onclick="showSettings('DOC')">
                    <p>DOC</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/docx.png" alt="DOCX" width="50" height="50" onclick="showSettings('DOCX')">
                    <p>DOCX</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/powerpoint.png" alt="POWERPOINT" width="50" height="50" onclick="showSettings('PPX')">
                    <p>PPX</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/excel.png" alt="EXCEL" width="50" height="50" onclick="showSettings('EXCEL')">
                    <p>EXCEL</p>
            	</div>
	    	<div class="symbol">
                    <img src="/pic/rar.png" alt="RAR" width="50" height="50" onclick="showSettings('RAR')">
                    <p>RAR</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/zip.png" alt="ZIP" width="50" height="50" onclick="showSettings('ZIP')">
                    <p>ZIP</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/7z.png" alt="7Z" width="50" height="50" onclick="showSettings('7Z')">
                    <p>7Z</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/pdf.png" alt="PDF" width="50" height="50" onclick="showSettings('PDF')">
                    <p>PDF</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/webp.png" alt="WEBP" width="50" height="50" onclick="showSettings('WEBP')">
                    <p>WEBP</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/ae.png" alt="AE" width="50" height="50" onclick="showSettings('AE')">
                    <p>AE</p>
            	</div>
            	<div class="symbol">
                    <img src="/pic/psd.png" alt="PSD" width="50" height="50" onclick="showSettings('PSD')">
                    <p>PSD</p>
            	</div>
            </div>
            <div id="exeSettings" class="settings-panel">
    <div class="left-section">
        <ul class="points-list">
            <li><input type="checkbox" id="opt1-point1"><label for="opt1-point1" class="checkbox-label">Shell</label></li>
            <li><input type="checkbox" id="opt1-point2"><label for="opt1-point2" class="checkbox-label">Stager</label></li>
            <li><input type="checkbox" id="opt1-point3"><label for="opt1-point3" class="checkbox-label">Live Modules</label></li>
        </ul>
    </div>
    <div class="middle-section">
        <ul class="points-list">
            <li><input type="radio" id="middle-point1" name="middle-points"><label for="middle-point1" class="radio-label">Stageless</label></li>
            <li><input type="radio" id="middle-point2" name="middle-points"><label for="middle-point2" class="radio-label">Staged</label></li>
            <li><input type="radio" id="middle-point3" name="middle-points"><label for="middle-point3" class="radio-label">Remote Execution</label></li>
        </ul>
    </div>
    <div class="right-section">
        <label for="fileSize">File Size (MB):</label>
        <div class="file-size-input">
            <input type="number" id="fileSize" name="fileSize" min="0" max="20480" step="1" class="input-field">
            <button class="increase-button" type="button">&#9650;</button>
            <button class="decrease-button" type="button">&#9660;</button>
        </div><br>
        <label for="exeName">EXE Name:</label>
        <input type="text" id="exeName" name="exeName" class="input-field"><br>
        <label for="pngUpload">Upload ICON:</label>
        <input type="file" id="pngUpload" name="pngUpload" class="input-field">
        <button class="compile-button">Compile EXE</button>
    </div>
    <div id="symbolSettings"></div>
</div>

            <div id="dllSettings" class="settings-panel">
            	<h6>DLL Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="binSettings" class="settings-panel">
            	<h6>BIN Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="sysSettings" class="settings-panel">
            	<h6>SYS Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="msiSettings" class="settings-panel">
            	<h6>MSI Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="mspSettings" class="settings-panel">
            	<h6>MSP Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="pcxSettings" class="settings-panel">
            	<h6>PCX Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="docSettings" class="settings-panel">
            	<h6>DOC Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="docxSettings" class="settings-panel">
            	<h6>DOCX Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="ppxSettings" class="settings-panel">
            	<h6>POWERPOINT Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="excelSettings" class="settings-panel">
            	<h6>EXCEL Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="rarSettings" class="settings-panel">
            	<h6>RAR Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="zipSettings" class="settings-panel">
            	<h6>ZIP Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="7zSettings" class="settings-panel">
            	<h6>7Z Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="pdfSettings" class="settings-panel">
            	<h6>PDF Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="webpSettings" class="settings-panel">
            	<h6>WEBP Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="aeSettings" class="settings-panel">
            	<h6>AE Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
            <div id="psdSettings" class="settings-panel">
            	<h6>PSD Builder</h6>
            	<div id="symbolSettings"></div>
            </div>
        </div>
    </div>
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
