        <div class="right-pane">
            <h2>XSHELL</h2>
            <div class="logx" id="logs"></div>

    <script>
        const logsDiv = document.getElementById('logs');

        // Funktion, um einen neuen Log-Eintrag hinzuzufügen
        function addLogEntry(message) {
            const logEntry = document.createElement('div');
            logEntry.className = 'log-entry';
            logEntry.textContent = message;
            logsDiv.appendChild(logEntry);

            // Scrollen zum neuesten Log-Eintrag
            logsDiv.scrollTop = logsDiv.scrollHeight;
        }

        // Simuliere den Empfang von Live-Logs per Ajax (ersetze dies mit deinem tatsächlichen Ajax-Code)
        function receiveLogs() {
            const logMessages = [
                'Log entry 1',
                'Log entry 2',
                'Log entry 3',
                'Log entry 4',
                // ... Weitere Log-Einträge hier ...
            ];

            // Füge die empfangenen Log-Einträge hinzu
            logMessages.forEach(message => {
                addLogEntry(message);
            });

            // Warte eine gewisse Zeit und rufe dann die Funktion erneut auf (Simuliert Live-Logs)
            setTimeout(receiveLogs, 3000); // 3000 Millisekunden = 3 Sekunden
        }

        // Starte den Prozess zum Empfang von Live-Logs
        receiveLogs();
    </script>
        </div>