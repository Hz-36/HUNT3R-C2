document.addEventListener('click', function(event) {
    const target = event.target;
    const rightPane = document.querySelector('.xbuild-right-pane'); 

    const clientRow = target.closest('.xbuild-client-row');
    if (clientRow) {
        const xid = clientRow.getAttribute('data-xid');

        fetch('xpass_info.php?xid=' + xid)
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
