const fileList = document.getElementById('file-list');
        const fileDetails = document.getElementById('file-details');
        const fileName = document.getElementById('file-name');
        const fileSize = document.getElementById('file-size');
        const fileContent = document.getElementById('file-content');

        // Simuliere den Empfang von Dateiinformationen per Ajax (ersetze dies mit deinem tatsächlichen Ajax-Code)
        function receiveFileList() {
            const files = [
                { name: 'file1.txt', size: '1024', content: 'This is the content of file 1.' },
                { name: 'file2.txt', size: '2048', content: 'This is the content of file 2.' },
                // ... Weitere Dateien hier ...
            ];

            // Füge die empfangenen Dateien zur Liste hinzu
            files.forEach(file => {
                const listItem = document.createElement('li');
                listItem.className = 'file-entry';
                const link = document.createElement('a');
                link.textContent = file.name;
                link.href = '#';
                link.addEventListener('click', function() {
                    showFileDetails(file);
                });
                listItem.appendChild(link);
                fileList.appendChild(listItem);
            });
        }

        // Zeige die Details einer ausgewählten Datei an
        function showFileDetails(file) {
            fileName.textContent = 'File Name: ' + file.name;
            fileSize.textContent = 'File Size: ' + file.size + ' bytes';
            fileContent.textContent = 'File Content: ' + file.content;
            fileDetails.style.display = 'block';
        }

        // Starte den Prozess zum Empfang von Dateiinformationen
        receiveFileList();