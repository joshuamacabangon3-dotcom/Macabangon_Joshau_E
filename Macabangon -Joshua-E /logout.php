<?php
session_start();

// Destroy session
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout Page</title>
    <link rel="stylesheet" href="style.css">

    <!-- Prevent going back after logout -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>
<body>

<div class="container">

    <h1>Thank You for Using the App!</h1>

    <a href="index.php">
        <button>Login Again</button>
    </a>

</div>

</body>
</html>
