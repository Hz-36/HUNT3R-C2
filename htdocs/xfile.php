<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">   
    <title>HUNT3R | Control Panel</title>
</head>
<body>
        <div class="right-pane">
            <h2>XFILE</h2>
            <div id="explorer">
        <h2>File Explorer</h2>
        <ul id="file-list"></ul>
    </div>
    <div id="file-details">
        <h2>File Details</h2>
        <p id="file-name"></p>
        <p id="file-size"></p>
        <p id="file-content"></p>
    </div>

    <script>
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
    </script>
</body>