document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('profileForm');
    let slider;
    let sliderValue;
    let inputValue;

    // Function to initialize slider once it's available
    function initializeSlider() {
        slider = document.getElementById('intervalSlider');
        sliderValue = document.getElementById('intervalValue');
        inputValue = document.getElementById('inputValue');

        if (slider) {
            slider.addEventListener('input', function() {
                sliderValue.textContent = slider.value;
                if (inputValue) {
                    inputValue.value = slider.value;
                } else {
                    console.error('inputValue is null. Check if the element is available in the loaded content.');
                }
            });
        }
    }

    // Check if slider is available, if not, wait for it
    const checkSliderExistence = setInterval(() => {
        initializeSlider();
        if (slider) {
            clearInterval(checkSliderExistence); // Stop checking once slider is found
        }
    }, 100);

    const mainContent = document.getElementById('main-content');
    mainContent.addEventListener('click', function(event) {
        const target = event.target;
        if (target && target.id === 'submitInterval') {
            const value = slider.value;
            alert(`Time Interval set to -> ${value}`);
        }
    });

    const profileButtons = document.querySelectorAll('.profile-button');

    profileButtons.forEach(button => {
        button.addEventListener('click', function() {
            profileButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            button.classList.add('active');
            if (sliderValue) {
                sliderValue.value = slider.value;
            }
        });
    });
});
