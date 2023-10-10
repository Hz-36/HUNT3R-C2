function openPopup(popupId) {
    const popup = document.getElementById(popupId);
    popup.style.display = 'flex';
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    popup.style.display = 'none';
}

function showSettings(symbolName) {
    const settingsPanel = document.getElementById('settingsPanel');
    const symbolSettings = document.getElementById('symbolSettings');
    // Clear previous settings
    symbolSettings.innerHTML = '';

    // Display settings for the selected symbol
    symbolSettings.innerHTML = `Settings for ${symbolName}`;
    settingsPanel.style.display = 'block';
}


