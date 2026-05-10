<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>

    <p>Session Started Successfully.</p>

    <a href="logout.php">
        <button>Logout</button>
    </a>

</div>

</body>
</html>
