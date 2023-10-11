function openPopup(popupId) {
    const popup = document.getElementById(popupId);
    popup.style.display = 'flex';
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    popup.style.display = 'none';
}

function showSettings(symbol) {
    // Remove spaces and convert to uppercase
    const symbolUpper = symbol.replace(/\s+/g, '').toUpperCase();

    // Define a mapping between symbol names and their corresponding settings panel IDs
    const symbolPanelMap = {
        'EXE': 'exeSettings',
        'DLL': 'dllSettings',
        'BIN': 'binSettings',
        'SYS': 'sysSettings',
        'MSI': 'msiSettings',
        'MSP': 'mspSettings',
        'PCX': 'pcxSettings',
        'DOC': 'docSettings',
        'DOCX': 'docxSettings',
        'PPX': 'ppxSettings',
        'EXCEL': 'excelSettings',
        'RAR': 'rarSettings',
        'ZIP': 'zipSettings',
        '7Z': '7zSettings',
        'PDF': 'pdfSettings',
        'WEBP': 'webpSettings',
        'AE': 'aeSettings',
        'PSD': 'psdSettings'
    };

    // Ensure the symbol is a valid key in the map
    if (!symbolPanelMap[symbolUpper]) {
        console.error('Invalid symbol:', symbol);
        return;
    }

    // Get the corresponding settings panel ID based on the symbol
    const panelId = symbolPanelMap[symbolUpper];

    console.log('Symbol:', symbol);
    console.log('Panel ID:', panelId);

    // Hide all settings panels
    const allPanels = document.querySelectorAll('.settings-panel');
    allPanels.forEach(panel => {
        panel.style.display = 'none';
    });

    // Show the settings panel for the selected symbol
    const selectedPanel = document.getElementById(panelId);
    console.log('Selected Panel:', selectedPanel);
    if (selectedPanel) {
        selectedPanel.style.display = 'block';
    }
}
