<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reusable Bar Chart</title>
    <style>
        .chart-container {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
        }
        canvas {
            width: 100%;
            height: 400px;
        }
    </style>
</head>
<body>

    <div class="chart-container">
        <canvas id="chart1"></canvas>
    </div>

    <div class="chart-container">
        <canvas id="chart2"></canvas>
    </div>

    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        // Function to create a reusable bar chart
        function createBarChart(chartId, labels, data, chartLabel) {
            const ctx = document.getElementById(chartId).getContext('2d');
            
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: chartLabel,
                        data: data,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Example: Creating two different bar charts with the reusable function
        createBarChart('chart1', ['Jan', 'Feb', 'Mar', 'Apr', 'May'], [10, 15, 8, 12, 6], 'Sales 2023');
        createBarChart('chart2', ['Q1', 'Q2', 'Q3', 'Q4'], [30, 40, 50, 60], 'Revenue 2023');
    </script>

</body>
</html>
