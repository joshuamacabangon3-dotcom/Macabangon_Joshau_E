<?php
session_start();

// Local array of users
$users = [
    "admin" => "12345",
    "user1" => "password"
];

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] == $password) {

        $_SESSION["username"] = $username;

        header("Location: landing.php");
        exit();

    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Login Page</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <p class="error"><?php echo $error; ?></p>
</div>

</body>
</html>
