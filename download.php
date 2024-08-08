<?php
// Establish a database connection (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace 'your_table' and 'your_file_id_column' with your actual table and column names
$fileId = $_GET['file_id'];
$sql = "SELECT file_name, file_type, file_data FROM pdf_files WHERE file_name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $fileId);  // Change "i" to "s" for string
$stmt->execute();
$stmt->bind_result($fileName, $fileType, $fileData);

if ($stmt->fetch()) {
    // Set appropriate headers for file download
    header("Content-Type: $fileType");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Output file content
    echo $fileData;
} else {
    // Handle file not found or other errors
    echo "File not found";
}

$stmt->close();
$conn->close();
?>
