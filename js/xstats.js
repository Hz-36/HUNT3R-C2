function generateGraph() {
            // Hier wird der Graph generiert
            var graphElement = document.getElementById('stats-graph');

            if (graphElement) {
                fetch('/php/graph_data.php') // Stellen Sie sicher, dass der Pfad zu Ihrer graph_data.php-Datei korrekt ist.
                    .then(response => response.json())
                    .then(data => {
                        var ctx = graphElement.getContext('2d');
                        new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: data.labels,
                                datasets: data.datasets,
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                            }
                        });
                    })
                    .catch(error => {
                        console.error('Fehler beim Abrufen der Daten:', error);
                    });
            }
        }