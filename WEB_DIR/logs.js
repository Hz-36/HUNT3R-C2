document.addEventListener('DOMContentLoaded', function() {
    const logsContainer = document.getElementById('logsContainer');
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');

    let currentIndex = -1;
    let searchResults = [];

    function loadLogs() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'logs.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                logsContainer.innerHTML = xhr.responseText;
                logsContainer.scrollTop = logsContainer.scrollHeight;
            }
        };
        xhr.send();
    }

    function findSearchResults(keyword) {
        searchResults = [];
        const logs = logsContainer.getElementsByClassName('log-entry');
        for (let i = logs.length - 1; i >= 0; i--) {
            if (logs[i].textContent.includes(keyword)) {
                searchResults.push(logs[i]);
            }
        }
    }

    searchButton.addEventListener('click', function() {
        const keyword = searchInput.value;
        if (keyword.trim() !== '') {
            findSearchResults(keyword);
            currentIndex = -1;
            highlightNext();
        }
    });

    function highlightNext() {
        if (searchResults.length === 0) return;
        currentIndex = (currentIndex + 1) % searchResults.length;
        scrollToResult(searchResults[currentIndex]);
    }

    function highlightPrev() {
        if (searchResults.length === 0) return;
        currentIndex = (currentIndex - 1 + searchResults.length) % searchResults.length;
        scrollToResult(searchResults[currentIndex]);
    }

    nextButton.addEventListener('click', highlightNext);
    prevButton.addEventListener('click', highlightPrev);

    function scrollToResult(result) {
        result.scrollIntoView({ behavior: 'smooth' });
        clearHighlights();
        result.classList.add('highlighted');
    }

    function clearHighlights() {
        searchResults.forEach(result => {
            result.classList.remove('highlighted');
        });
    }

    loadLogs();
    setInterval(loadLogs, 5000);
});
