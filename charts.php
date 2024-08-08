<!DOCTYPE html>
<html>
<head>
    <title>Teams per Country</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            background-image:url(bg.jpeg);
        }

        #countryPieChart {
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    

<canvas id="countryPieChart"></canvas>

<?php
// Replace these variables with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the count of teams per country
$sql = "SELECT Country, COUNT(TeamID) as team_count FROM team GROUP BY Country";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $countryData = [];
    while ($row = $result->fetch_assoc()) {
        $countryData[$row["Country"]] = $row["team_count"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<script>
    var countryData = <?php echo json_encode($countryData); ?>;
    var countries = Object.keys(countryData);
    var teamCounts = Object.values(countryData);

    var ctx = document.getElementById('countryPieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: countries,
            datasets: [{
                label: 'Teams per Country',
                data: teamCounts,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                    'rgba(255, 159, 64, 0.7)',
                    // Add more colors if needed
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
            },
            title: {
                display: true,
                text: 'Teams per Country'
            }
        }
    });
</script>
</body>
</html>
