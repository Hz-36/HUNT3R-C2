const killSwitchButton = document.querySelector('.kill-switch');

let clickStartTime;
let isButtonClicked = false;

killSwitchButton.addEventListener('mousedown', () => {
    clickStartTime = Date.now();
    isButtonClicked = true;
    killSwitchButton.classList.add('clicked');
    animateProgressBar();
});

killSwitchButton.addEventListener('mouseup', () => {
    isButtonClicked = false;
    killSwitchButton.classList.remove('clicked');
});

function animateProgressBar() {
    if (!isButtonClicked) return;

    const currentTime = Date.now();
    const elapsedTime = currentTime - clickStartTime;

    const progressBar = killSwitchButton.querySelector('.progress-bar');
    progressBar.style.setProperty('--progress-width', `${(elapsedTime / 3000) * 100}%`);

    if (elapsedTime < 3000) {
        requestAnimationFrame(animateProgressBar);
    } else {
        // Three seconds elapsed, open the new popup
        openNewPopup();
    }
}

function openNewPopup() {
    console.log('Popup opened after 3 seconds');

    const popupContainer = document.getElementById('popupContainer');
    popupContainer.style.display = 'flex';

    // Start the 30-second timer
    startTimer(30);
}

function startTimer(duration) {
    let timer = duration;
    const timerElement = document.querySelector('.timer');

    const intervalId = setInterval(() => {
        timerElement.textContent = timer;

        if (--timer < 0) {
            // Timer has reached 0, simulate click on 'KILL NOW' button
            clearInterval(intervalId);
            killNow();
        }
    }, 1000);
}

function killNow() {
    // Implement logic to send request to the server or perform actions for 'KILL NOW' button
    console.log('KILL NOW button clicked or timer elapsed - sending request...');
}

function closePopup() {
    const popupContainer = document.getElementById('popupContainer');
    popupContainer.style.display = 'none';
}

const cancelButton = document.querySelector('.cancel-button');
cancelButton.addEventListener('click', () => {
    closePopup();

    killSwitchButton.classList.remove('clicked');
});


