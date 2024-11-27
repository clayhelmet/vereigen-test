<?php
session_start();
error_reporting(0); // Report all types of errors

include("config.php");

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$username=$_POST['username'];
$query="SELECT * FROM tbl_reg WHERE username='".$username."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $row['username'];
    $password_new = $row['password'];
    if ($username === $user && $password === $password_new) {
        
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (isset($error)){ ?>
            <p class="error"><?php $error; ?></p>
        <?php } ?>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
