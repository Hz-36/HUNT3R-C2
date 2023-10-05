document.addEventListener('click', function(event) {
    const target = event.target;
    const rightPane = document.querySelector('.right-pane');  // Ensure rightPane is defined here

    // Check if the clicked element or its parent has the class 'client-row'
    const clientRow = target.closest('.client-row');
    if (clientRow) {
        const xid = clientRow.getAttribute('data-xid');

        // Load the extended information and image via an Ajax request
        fetch('client_details.php?xid=' + xid)
            .then(response => response.text())
            .then(data => {
                console.log('Received data:', data); // Log the response data
                rightPane.innerHTML = ''; // Clear existing content
                rightPane.insertAdjacentHTML('beforeend', data); // Append the response data as HTML content
            })
            .catch(error => {
                console.error('Error loading client details:', error);
            });
    }
});