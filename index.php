<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

    $_SESSION;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup and login index</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>This is Index Page</h1>

    <br>
    Hello, <?php echo $user_data['user_name']; ?>
</body>

</html>