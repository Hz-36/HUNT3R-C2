document.addEventListener('click', function(event) {
    const target = event.target;
    const rightPane = document.querySelector('.right-pane'); 

    const clientRow = target.closest('.client-row');
    if (clientRow) {
        const xid = clientRow.getAttribute('data-xid');

        fetch('client_details.php?xid=' + xid)
            .then(response => response.text())
            .then(data => {
                rightPane.innerHTML = ''; // Clear existing content
                rightPane.insertAdjacentHTML('beforeend', data); // Append -> response data as HTML content
            })
            .catch(error => {
                console.error('Error loading client details:', error);
            });
    }
});