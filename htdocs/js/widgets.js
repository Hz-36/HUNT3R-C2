const popupOverlay = document.getElementById('popupOverlay');

if (popupOverlay) {
    popupOverlay.addEventListener('click', function(event) {
        const target = event.target;
        if (target && target.id === 'closePopupButton') {
            popupOverlay.style.display = 'none';
        }
    });

    setTimeout(function() {
        popupOverlay.style.display = 'none';
    }, 10000);
} else {
    console.error('popupOverlay is null. Check if the element is available in the loaded content.');
}


