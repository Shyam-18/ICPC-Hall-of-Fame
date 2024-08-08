<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Check if a file is selected
    if ($_FILES['pdf']['error'] == 0) {
        
        // Connect to the database (replace with your database connection code)
        $conn = new mysqli('localhost', 'root', '', 'file');
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Get the original filename
        $original_file_name = $_FILES['pdf']['name'];
        
        // Debugging: Print original file name
        echo "Original File Name: " . $original_file_name . "<br>";
        
        $file_data = file_get_contents($_FILES['pdf']['tmp_name']);
        
        $stmt = $conn->prepare("INSERT INTO pdf_files (file_name, file_data) VALUES (?, ?)");
        $stmt->bind_param('ss', $original_file_name, $file_data);
        
        if ($stmt->execute()) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
        
        $stmt->close();
        $conn->close();
    } else {
        echo "Please select a file.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload PDF</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="pdf">Select PDF file:</label>
        <input type="file" name="pdf" accept=".pdf">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
