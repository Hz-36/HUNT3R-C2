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
            	<a href="#" onclick="displayCode('bash-rl')">bash -rl</a>
            	<a href="#" onclick="displayCode('bash5')">bash 5</a>
            	<a href="#" onclick="displayCode('bashudp')">bash -i</a>
            	<a href="#" onclick="displayCode('nc-mkfifo')">nc -mkfifo</a>
            	<a href="#" onclick="displayCode('nc-e')">nc -e</a>
            	<a href="#" onclick="displayCode('nc-c')">nc -c</a>
            	<a href="#" onclick="displayCode('nc.exe')">nc.exe</a>
            	<a href="#" onclick="displayCode('ncat-e')">ncat -e</a>
            	<a href="#" onclick="displayCode('ncat.exe')">ncat.exe</a>
            	<a href="#" onclick="displayCode('ncatudp')">Ncat UDP 5</a>
            	<a href="#" onclick="displayCode('curl')">curl</a>
            	<a href="#" onclick="displayCode('rustcat')">Rustcat</a>
            	<a href="#" onclick="displayCode('c')">C</a>
            	<a href="#" onclick="displayCode('cwin')">C Win</a>
            	<a href="#" onclick="displayCode('csharp-tcp')">C# TCP</a>
            	<a href="#" onclick="displayCode('csharp-bash')">C# Bash</a>
            	<a href="#" onclick="displayCode('cpp')">C++</a>
            	<a href="#" onclick="displayCode('py1')">Python 1</a>
            	<a href="#" onclick="displayCode('py2')">Python 2</a>
            	<a href="#" onclick="displayCode('py3')">Python 3</a>
            	<a href="#" onclick="displayCode('phpcmds')">PHP CMD 1</a>
            	<a href="#" onclick="displayCode('phpcmd1')">PHP CMD 2</a>
            	<a href="#" onclick="displayCode('phpcmd2')">PHP CMD 3</a>
            	<a href="#" onclick="displayCode('phpexec')">PHP Execute</a>
            	<a href="#" onclick="displayCode('phpexecshell')">PHP Execute Shell</a>
            	<a href="#" onclick="displayCode('phpsystem')">PHP System</a>
            	<a href="#" onclick="displayCode('phppass')">PHP Pass</a>
            	<a href="#" onclick="displayCode('phpopen')">PHP Open</a>
            	<a href="#" onclick="displayCode('phpprocopen')">PHP Process Open/a>
            	<a href="#" onclick="displayCode('perl')">Perl</a>
            	<a href="#" onclick="displayCode('perlnosh')">Perl No Sh</a>
            	<a href="#" onclick="displayCode('powershell1')">Powershell 1</a>
            	<a href="#" onclick="displayCode('powershell2')">Powershell 2</a>
            	<a href="#" onclick="displayCode('powershell3')">Powershell 3</a>
            	<a href="#" onclick="displayCode('powershelltls')">Powershell TLS</a>
            	<a href="#" onclick="displayCode('powershellbase64')">Powershell Base 64</a>
            	<a href="#" onclick="displayCode('ruby')">Ruby</a>
            	<a href="#" onclick="displayCode('rubynosh')">Ruby No Sh</a>
            	<a href="#" onclick="displayCode('nodejs1')">Node.js 1</a>
            	<a href="#" onclick="displayCode('nodejs2')">Node.js 2</a>
            	<a href="#" onclick="displayCode('java1')">Java 1</a>
            	<a href="#" onclick="displayCode('java2')">Java 2</a>
            	<a href="#" onclick="displayCode('java3')">Java 3</a>
            	<a href="#" onclick="displayCode('javaweb')">Java Web</a>
            	<a href="#" onclick="displayCode('javatwoway')">Java To Way</a>
            	<a href="#" onclick="displayCode('javasrcipt')">JavaScript</a>
            	<a href="#" onclick="displayCode('groovy')">Groovy</a>
            	<a href="#" onclick="displayCode('telnet')">telnet</a>
            	<a href="#" onclick="displayCode('zsh')">zsh</a>
            	<a href="#" onclick="displayCode('lua1')">Lua 1</a>
            	<a href="#" onclick="displayCode('lua2')">Lua 2</a>
            	<a href="#" onclick="displayCode('go1')">GO 1</a>
            	<a href="#" onclick="displayCode('go2')">GO 2</a>
            	<a href="#" onclick="displayCode('awk')">AWK</a>
            	<a href="#" onclick="displayCode('dart')">Dart</a>
            	<a href="#" onclick="displayCode('crytalsys')">Crystal SYS</a>
            	<a href="#" onclick="displayCode('crystalcode')">Crytal Code</a>
    	    </div>
    	    <div class="code-display">
            	<!-- Code for selected menu item will appear here -->
    	    </div>
    	</div>
    </div>
</div>