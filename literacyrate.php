<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository Website</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: bisque;
        }

        /* CSS for header */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /* ... your existing CSS styles ... */

        /* Adjust the width of the canvas */
        #literacyChart {
            width: 100%;
            max-width: 800px; /* Adjust the maximum width as needed */
            margin: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>LINEAR ALGEBRA</h1>
    </header>

    <!-- Canvas for the chart -->
    <canvas id="literacyChart"></canvas>

    <?php
    include('page1p.php');

    // Array of state names
    $stateNames = [
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand',
        'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab',
        'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal'
    ];

    // Arrays to store state data
    $literacyRates = [];

    // Loop to retrieve data
    foreach ($stateNames as $stateName) {
        $stateInfo = getStateInfo($stateName, $conn);
        $literacyRate = $stateInfo ? $stateInfo['LiteracyRate'] : null;

        // Add data to arrays
        $literacyRates[] = $literacyRate;
    }

    // Close the database connection
    $conn->close();
    ?>

    <script>
        // Chart.js script
        var ctx = document.getElementById('literacyChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($stateNames); ?>,
                datasets: [{
                    label: 'Literacy Rate',
                    data: <?php echo json_encode($literacyRates); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
    </script>

    <!-- ... your existing script and closing body/html tags ... -->
</body>
</html>
