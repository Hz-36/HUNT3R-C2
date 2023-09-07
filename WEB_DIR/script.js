function loadContent(url) {
    fetch(url)
        .then(response => response.text())
        .then(data => {
            const mainContent = document.getElementById('main-content');
            mainContent.innerHTML = data;
        })
        .catch(error => {
            console.error('Error loading content:', error);
        });
}


loadContent('control.php');

document.addEventListener('DOMContentLoaded', function() {
    const mainContent = document.getElementById('main-content');

    mainContent.addEventListener('click', function(event) {
        if (event.target.classList.contains('load-client-table')) {
            // Führen Sie hier den Code aus, um die Tabelle zu laden und zu aktualisieren
            loadClientTable(); // Funktion zum Laden der Tabelle
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const clientRows = document.querySelectorAll('.client-row');
    const rightPane = document.querySelector('.right-pane');

    clientRows.forEach(row => {
        row.addEventListener('click', function() {
            const xid = row.getAttribute('data-xid');
            
            // Lade die erweiterten Informationen und das Bild über eine Ajax-Anfrage
            fetch('client_details.php?xid=' + xid)
                .then(response => response.text())
                .then(data => {
                    rightPane.innerHTML = data;

                })
                .catch(error => {
                    console.error('Error loading client details:', error);
                });
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
