<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xLogs Page</title>
    <link rel="stylesheet" href="ystyles.css">
</head>
<body>
    <div class="xlogs">
    <div class="logs-container" id="logsContainer">
        <!-- Hier werden die Logs eingefügt -->
    </div>
    <div class="controls-container">
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Suche...">
            <button id="searchButton"><img src="search-icon.png" alt="Search"></button>
        </div>
        <div class="navigation-buttons">
            <button id="prevButton"><img src="prev-icon.png" alt="Previous"></button>
            <button id="nextButton"><img src="next-icon.png" alt="Next"></button>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="logs.js"></script>
</body>
</html>
