document.addEventListener('DOMContentLoaded', function() {
    const clientRows = document.querySelectorAll('.client-row');
    const rightPane = document.querySelector('.right-pane');

    clientRows.forEach(row => {
        row.addEventListener('click', function() {
            const xid = row.getAttribute('data-xid');
            
            // Lade die erweiterten Informationen über eine Ajax-Anfrage
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
