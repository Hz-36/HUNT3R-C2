<div class="left-pane">
    <div class="left-panexpass">
        <div class="xbuild-client-table">
    	    <h3>Clients</h3>
    	    <table>
        	<thead>
            	    <tr>
                	<th>xClientID</th>
                	<th>IPv4</th>
                	<th>Nickname</th>
            	    </tr>
        	</thead>
                <tbody>
                    <?php
              		$pdo = new PDO('mysql:host=localhost;dbname=clients', 'hunt3r', 'hunt3r');

            		$stmt = $pdo->prepare('SELECT xid, ip, nickname FROM xclients');
            		$stmt->execute();
            		$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

            		foreach ($clients as $client) {
                	    echo '<tr class="xbuild-client-row" data-xid="' . $client['xid'] . '">';
                	    echo '<td>' . $client['xid'] . '</td>';
                	    echo '<td>' . $client['ip'] . '</td>';
                	    echo '<td>' . $client['nickname'] . '</td>';
                	    echo '</tr>';
            		}
            	    ?>
                </tbody>
            </table>
        </div>
        <div class="xbuild-right-pane" id="xbuild-right-pane">
    	    <h3>HUNT3R C2</h3>
    	    <div class="info-container"><br><br>
    		<p>Current Version: ALPHA 1.02</p><br>
    		<div class="update-info">
        	    <h3>Last Updates/Fixes</h3>
       		    <table>
            		<tr><td>xbuild rework</td></tr>
            		<tr><td>xbuild build tabs</td></tr>
            		<tr><td>xpass added</td></tr>
            		<tr><td>xpass_info added</td></tr>
            		<tr><td>CSS designs updated</td></tr>
        	    </table>
    		</div>
    		<div class="update-info">
        	    <h3>Upcoming Updates</h3>
        	    <table>
            		<tr><td>CSS Structure rework</td></tr>
            		<tr><td>CSS Optimization</td></tr>
            		<tr><td>C2 Web Installer</td></tr>
            		<tr><td>XCHAT</td></tr>
            		<tr><td>XTEAM</td></tr>
            		<tr><td>Light- darkmode (recolor settings)</td></tr>
        	    </table>
    		</div><br><br><br><br><br><br><br>

    		<p>For More Information Or Troubleshooting, Please Have a Look at Our <a href="documentation_link">Documentation</a>.</p>
    		<p>Visit The Official <a href="https://google.com/">R4IN Security Website</a>.</p>
	    </div>
	</div>
    </div>
</div>