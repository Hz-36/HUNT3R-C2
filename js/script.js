function loadContent(url) {
    fetch(url)
        .then(response => response.text())
        .then(data => {
            const mainContent = document.getElementById('main-content');
            mainContent.innerHTML = data;

            if (url.includes('xstats.php')) {
                generateGraph();
            } else if (url.includes('xlogs.php')) {
                const script = document.createElement('script');
                script.src = '/js/logs.js';
                script.defer = true;
                mainContent.appendChild(script);
            }
        })
        .catch(error => {
            console.error('Error loading content:', error);
        });
}


// Load the initial content
loadContent('control.php');

document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item-box');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            const menuItemText = item.querySelector('.menu-item-text').textContent;
            loadContent(menuItemText.toLowerCase() + '.php');
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item-box');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            const menuItemText = item.querySelector('.menu-item-text').textContent;
            loadContent(menuItemText.toLowerCase() + '.php');
        });
    });
});
