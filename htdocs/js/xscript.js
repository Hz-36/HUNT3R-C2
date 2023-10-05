document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('profileForm');
    const slider = document.getElementById('slider');
    const sliderValue = document.getElementById('sliderValue');
    const inputValue = document.getElementById('inputValue'); // Hinzugefügt

    // Funktion zum Senden des AJAX-Requests
    function sendAjaxRequest(requestString) {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `http://127.0.0.1:3000?data=${requestString}`, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Daten erfolgreich gesendet');
                } else {
                    console.error('Fehler beim Senden der Daten');
                }
            }
        };
        xhr.send();
    }

    // Event-Listener für Slider-Änderungen
    slider.addEventListener('input', function() {
        sliderValue.textContent = slider.value; // Anstelle von .value
        inputValue.value = slider.value; // Hinzugefügt
    });

    // Finde die Profil-Buttons im DOM
    const profileButtons = document.querySelectorAll('.profile-button');

    // Event-Listener für Profil-Button-Klicks
    profileButtons.forEach(button => {
        button.addEventListener('click', function() {
            profileButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            button.classList.add('active');
            sliderValue.value = slider.value;
        });
    });

     // closePopupButton-Event-Listener hier hinzufügen
    const closePopupButton = document.getElementById('closePopupButton');
    closePopupButton.addEventListener('click', function() {
        popupOverlay.style.display = 'none';
    });

    const popupOverlay = document.getElementById('popupOverlay');

    setTimeout(function() {
        popupOverlay.style.display = 'none';
    }, 10000);
});
