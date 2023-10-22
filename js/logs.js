


//NEW NEW NEW NEW NEW NEW NEW NEW NEW NEW NEW NEW NEW
document.addEventListener('DOMContentLoaded', function() {
    let searchResults = [];
    let currentIndex = -1;

    function loadLogs() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'logs.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const logsContainer = document.getElementById('logsContainer');
                    if (logsContainer) {
                        logsContainer.innerHTML = xhr.responseText;
                        logsContainer.scrollTop = logsContainer.scrollHeight;
                    }
                } else {
                    console.error('Failed to load logs. HTTP status:', xhr.status);
                }
            }
        };
        xhr.send();
    }

    function findSearchResults(keyword) {
        const logsContainer = document.getElementById('logsContainer');
        if (!logsContainer) {
            console.error('logsContainer is null. Could not find logs container.');
            return;
        }

        const logs = logsContainer.getElementsByClassName('log-entry');
        searchResults = Array.from(logs).filter(log => log.textContent.includes(keyword));
    }

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

    function initializeEventListeners() {
        const searchButton = document.getElementById('searchButton');
        if (searchButton) {
            searchButton.addEventListener('click', function() {
                const searchInput = document.getElementById('searchInput');
                const keyword = searchInput.value;
                if (keyword.trim() !== '') {
                    findSearchResults(keyword);
                    currentIndex = -1;
                    highlightNext();
                }
            });
        }

        const prevButton = document.getElementById('prevButton');
        if (prevButton) {
            prevButton.addEventListener('click', function() {
                highlightPrev();
            });
        }

        const nextButton = document.getElementById('nextButton');
        if (nextButton) {
            nextButton.addEventListener('click', function() {
                highlightNext();
            });
        }
    }

    // Initial event listener setup
    initializeEventListeners();

    // Load logs initially when the page is loaded
    loadLogs();

    // Poll for dynamic content and load logs
    const pollContentInterval = setInterval(() => {
        loadLogs();
    }, 5000);
});

