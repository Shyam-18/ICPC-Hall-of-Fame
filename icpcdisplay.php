<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: auto auto;
            margin-top: 350px; /* Center the table */
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        /* Alternate row color */
        tr:nth-child(even) {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>



</body>
</html>

<?php
// Connect to your database (Replace placeholders with actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Enable error reporting

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example queries (Replace these with your actual queries)
    if (isset($_GET['participant'])) {
        $sql = "SELECT * FROM participant";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display the table for participants
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Participant ID</th><th>Participant Name</th><th>Team ID</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row["ParticipantID"]) . "</td><td>" . htmlspecialchars($row["ParticipantName"]) . "</td><td>" . htmlspecialchars($row["TeamID"]) . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No participants found";
        }
    }

    if (isset($_GET['team'])) {
        $sql = "SELECT * FROM team";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display the table for participants
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Team ID</th><th>Team Name</th><th>Country</th><th>Hall of Fame ID</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row["TeamID"]) . "</td><td>" . htmlspecialchars($row["TeamName"]) . "</td><td>" . htmlspecialchars($row["Country"]) . "</td> <td>" . htmlspecialchars($row["HallofFameID"]) . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No Teams found";
        }
    }


    if (isset($_GET['coach'])) {
        $sql = "SELECT * FROM coach";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display the table for participants
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Coach ID</th><th>Coach Name</th><th>Team ID</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row["CoachID"]) . "</td><td>" . htmlspecialchars($row["CoachName"]) . "</td><td>" . htmlspecialchars($row["TeamID"]) . "</td> </tr>";
            }
            echo "</table>";
        } else {
            echo "No Coaches found";
        }
    }

    if (isset($_GET['online_contest'])) {
        $sql = "SELECT * FROM online_contest";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display the table for participants
        if ($result->num_rows > 0) {
            echo "<table><tr><th>OnlineContest ID</th><th>Contest Name</th><th>Start Date time</th><th>End Date time</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row["OnlineContestID"]) . "</td><td>" . htmlspecialchars($row["ContestName"]) . "</td><td>" . htmlspecialchars($row["StartDateTime"]) . "</td> <td>" . htmlspecialchars($row["EndDateTime"]) . "</td> </tr>";
            }
            echo "</table>";
        } else {
            echo "No Online contests found";
        }
    }

    if (isset($_GET['onsitecontest'])) {
        $sql = "SELECT * FROM onsitecontest";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display the table for participants
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Contest ID</th><th>Contest Name</th><th>Start Date time</th><th>End Date time</th><th>Location</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row["ContestID"]) . "</td><td>" . htmlspecialchars($row["ContestName"]) . "</td><td>" . htmlspecialchars($row["StartDateTime"]) . "</td> <td>" . htmlspecialchars($row["EndDateTime"]) . "</td> <td>" . htmlspecialchars($row["Location"]) . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No Onsite contests found";
        }
    }

    if (isset($_GET['worldfinals'])) {
        $sql = "SELECT * FROM worldfinals";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        // Display the table for participants
        if ($result->num_rows > 0) {
            echo "<table><tr><th>World finals ID</th><th>Location</th><th>Start Date time</th><th>End Date time</th><th>Hall of Fame ID</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . htmlspecialchars($row["WorldfinalsID"]) . "</td><td>" . htmlspecialchars($row["Location"]) . "</td><td>" . htmlspecialchars($row["StartDateTime"]) . "</td> <td>" . htmlspecialchars($row["EndDateTime"]) . "</td> <td>" . htmlspecialchars($row["HallofFameID"]) . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No Hall of fame found";
        }
    }
    // Similarly, handle other sections (teams, online contests, onsite contests, etc.) with their respective queries and table displays

    $conn->close();
} catch (mysqli_sql_exception $e) {
    die("Error: " . $e->getMessage());
}
?>
