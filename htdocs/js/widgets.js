const popupOverlay = document.getElementById('popupOverlay');
const confirmDeleteButton = document.getElementById('confirmDeleteButton');
const cancelDeleteButton = document.getElementById('cancelDeleteButton');
const clientIdToDeleteInput = document.getElementById('clientIdToDelete');

document.addEventListener('click', function(event) {
    if (event.target.classList.contains('delete-button')) {
        event.preventDefault();
        const xid = event.target.parentElement.querySelector('input[name="xid"]').value;
        clientIdToDeleteInput.value = xid;  // Setze die xid im Popup-Formular
        popupOverlay.style.display = 'flex';
    }
});

if (confirmDeleteButton && cancelDeleteButton) {
    confirmDeleteButton.addEventListener('click', function() {
        const xidToDelete = clientIdToDeleteInput.value;
        console.log('Client profile with xid ' + xidToDelete + ' will be deleted.');
        // Hier kannst du eine Funktion aufrufen, um das Profil zu löschen
        deleteClientProfile(xidToDelete);
        closePopup();
    });

    cancelDeleteButton.addEventListener('click', function() {
        closePopup();
    });
}

function closePopup() {
    popupOverlay.style.display = 'none';
}

function deleteClientProfile(xid) {
    fetch('delete_client_profile.php?xid=' + xid, {
        method: 'GET',  // Ändere die Methode zu GET, da wir die xid in der URL übergeben
    })
    .then(response => response.json())
    .then(data => {
        console.log('Client profile deleted:', data);
    })
    .catch(error => console.error('Error deleting client profile:', error));
}
