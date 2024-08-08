<!DOCTYPE html>
<html>
<head>
    <title>Result Scores</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
            background-image:url(bg.jpeg);
           
        }
        .graph-container {
            max-width: 600px;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="number"],
        button {
            padding: 8px;
            margin-right: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            cursor: pointer;
            background-color: #3498db;
            color: white;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2980b9;
        }
        #scoreDisplay {
            font-size: 18px;
            margin-top: 10px;
        }
        #resultChart {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="graph-container">
        <label for="resultIdInput">Enter Result ID:</label>
        <input type="number" id="resultIdInput" placeholder="Enter Result ID">
        <button onclick="displayScore()">Display Score</button>
        <p id="scoreDisplay"></p>
        <canvas id="resultChart" width="210" height="200"></canvas>
    </div>


    <script>
        var resultData = [
            { ResultID: 1, Score: 95 },
            { ResultID: 2, Score: 88 },
            { ResultID: 3, Score: 75 },
            { ResultID: 4, Score: 92 },
            { ResultID: 5, Score: 80 },
        ];

        var resultIDs = resultData.map(item => item.ResultID);
        var scores = resultData.map(item => item.Score);
        var myChart;

        function displayScore() {
            var inputVal = parseInt(document.getElementById('resultIdInput').value);
            var scoreDisplay = document.getElementById('scoreDisplay');

            var result = resultData.find(item => item.ResultID === inputVal);
            if (result) {
                scoreDisplay.textContent = 'Score for Result ID ' + result.ResultID + ': ' + result.Score;

                var index = resultIDs.indexOf(result.ResultID);
                if (index !== -1) {
                    myChart.data.datasets[0].backgroundColor = scores.map((score, i) =>
                        i === index ? 'rgba(255, 99, 132, 0.7)' : 'rgba(54, 162, 235, 0.7)'
                    );
                    myChart.data.datasets[0].borderColor = scores.map((score, i) =>
                        i === index ? 'rgba(255, 99, 132, 1)' : 'rgba(54, 162, 235, 1)'
                    );
                    myChart.update();
                }
            } else {
                scoreDisplay.textContent = 'Result ID not found!';
            }
        }

        var ctx = document.getElementById('resultChart').getContext('2d');
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: resultIDs,
                datasets: [{
                    label: 'Scores',
                    data: scores,
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</body>
</html>
