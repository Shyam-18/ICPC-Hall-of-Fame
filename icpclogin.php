<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website With Login & Registration | Codehal</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body{
            background-image: url(wp2939895.jpg);
        }
    </style>

    
</head>
<body>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <div class="wrapper">
      <form action="icpclogin.php" method="post">
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" placeholder="Team Name" id="teamname" name="teamname"
            required>
            <i class='bx bx-user'></i>
        </div>
        <div class="input-box">
            <input type="password"
            placeholder="password" id="password" name="password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
         <div class="remember-forgot">
          <label><input type="checkbox">remember me</label>
          <a href="#">forgot password ? </a>
         </div>
         <button type="submit" class="btn">Login</button>
         <div class="register-link">
          <p >Don't have an account ? <a herf="#"></a></p>
         </div>
      </form>
    </div>
</body>
</html>


<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamName = isset($_POST['teamname']) ? $_POST['teamname'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $conn = new mysqli('localhost', 'root', '', 'project');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Using prepared statement to avoid SQL injection
        $stmt = $conn->prepare("SELECT password FROM registereddata WHERE team_name = ?");
        $stmt->bind_param("s", $teamName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $storedPassword = $row["password"];

            if ($password === $storedPassword) {
                $_SESSION['teamname'] = $teamName;
                header("Location: icpcoriginalmain.php");
                exit();
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo '<span style="color: red;">Invalid username or password</span>';

        }

        $stmt->close();
        $conn->close();
    }
}
?>

            
     



