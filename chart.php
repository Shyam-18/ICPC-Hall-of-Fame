<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Page</title>
    <style>
        /* Add your CSS styles here */
        body {
            background-color: bisque;
        }

        .pie-chart-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    // Include your database connection and functions here
    include('page1p.php');

    // Get the state name from the URL
    $stateName = $_GET['state'] ?? '';

    if ($stateName) {
        $jobVacancies = getJobVacancyInfo($stateName, $conn);

        echo "
        <div class='pie-chart-container'>
            <canvas id='pieChart'></canvas>
        </div>
        ";

        echo "<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>";
        echo "<script>";
        echo "drawPieChart(" . json_encode($jobVacancies) . ");";
        echo "</script>";
    } else {
        echo "<p>No state selected.</p>";
    }
    ?>

    <script>
        function drawPieChart(jobVacancies) {
            var labels = jobVacancies.map(function (vacancy) {
                return vacancy.Sector;
            });

            var data = jobVacancies.map(function (vacancy) {
                return vacancy.JobVacancies;
            });

            var ctx = document.getElementById('pieChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            // Add more colors as needed
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Job Vacancies by Sector'
                    }
                }
            });
        }
    </script>

</body>

</html>
