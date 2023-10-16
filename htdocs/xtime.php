<div class="xtime-pane">
    <div class="xtime-container">
        <div class="xtime-upper">
            <!-- Input fields and sliders -->
            <input type="text" placeholder="Input 1">
            <input type="text" placeholder="Input 2">
            <input type="range" min="0" max="100">
            <input type="range" min="0" max="100">
        </div>
        <div class="xtime-lower">
            <div class="xtime-left-container">
    		<div class="xtime-table">
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
                        	    echo '<tr class="xtime-client-row" data-xid="' . $client['xid'] . '">';
                        	    echo '<td><a href="xtime_info.php?xid=' . $client['xid'] . '">' . $client['xid'] . '</a></td>';
                        	    echo '<td>' . $client['ip'] . '</td>';
                        	    echo '<td>' . $client['nickname'] . '</td>';
                        	    echo '</tr>';
                    		}
               		    ?>
            		</tbody>
        	    </table>
    		</div>
	    </div>
            <div class="xtime-right-container">
                <!-- Content for the right container -->
            </div>
        </div>
    </div>
</div>

