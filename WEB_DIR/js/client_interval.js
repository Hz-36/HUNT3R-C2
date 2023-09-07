document.addEventListener('DOMContentLoaded', function() {
    const intervalSlider = document.getElementById('intervalSlider');
    const intervalValue = document.getElementById('intervalValue');
    const submitInterval = document.getElementById('submitInterval');

    // Event-Listener für Slider-Änderungen
    intervalSlider.addEventListener('input', function() {
        intervalValue.value = intervalSlider.value;
    });

    // Event-Listener für Button-Klick
    submitInterval.addEventListener('click', function() {
        const selectedInterval = intervalSlider.value;
        // Hier können Sie den ausgewählten Wert verwenden und absenden
        alert('Selected Interval: ' + selectedInterval);
    });
});
