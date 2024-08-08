<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Team Marks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .marks {
            max-width: 400px;
            margin: 20px auto;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h2>Enter Team ID to Display Marks</h2>
    <form method="POST">
        <label for="teamid">Team ID:</label>
        <input type="text" id="teamid" name="teamid" required>
        <button type="submit">Submit</button>
    </form>

    <?php
$username = "root";
$password = "";
$dbname = "project";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamID = isset($_POST['teamid']) ? $_POST['teamid'] : '';

    $conn = new mysqli('localhost', $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve marks from onsitecontest table
    $sqlOnsite = "SELECT marks FROM onsitecontest WHERE ContestID = ?";
    $stmtOnsite = $conn->prepare($sqlOnsite);
    $stmtOnsite->bind_param("i", $teamID); // "i" indicates integer type for ContestID
    $stmtOnsite->execute();
    $resultOnsite = $stmtOnsite->get_result();

    // Retrieve marks from online_contest table
    $sqlOnline = "SELECT marks FROM online_contest WHERE OnlineContestID = ?";
    $stmtOnline = $conn->prepare($sqlOnline);
    $stmtOnline->bind_param("i", $teamID); // "i" indicates integer type for OnlineContestID
    $stmtOnline->execute();
    $resultOnline = $stmtOnline->get_result();
    ?>

    <div class="marks">
    <?php
    if ($resultOnsite->num_rows > 0) {
        while ($row = $resultOnsite->fetch_assoc()) {
            echo "Marks from Onsite Contest: " . $row["marks"] . "<br>";
        }
    } else {
        echo "No marks found for the given Contest ID in Onsite Contest.";
    }

    if ($resultOnline->num_rows > 0) {
        while ($row = $resultOnline->fetch_assoc()) {
            echo "Marks from Online Contest: " . $row["marks"] . "<br>";
        }
    } else {
        echo "No marks found for the given Contest ID in Online Contest.";
    }

    $stmtOnsite->close();
    $stmtOnline->close();
    $conn->close();
    ?>
    </div>
<?php
}
?>

    

</body>
</html>
