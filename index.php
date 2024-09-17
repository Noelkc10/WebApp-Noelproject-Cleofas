<?php
// index.php - A basic home page example

// Define some variables
$title = "Welcome to Noel Project";
$welcomeMessage = "Hello, and welcome to our website!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>
    <main>
        <p><?php echo $welcomeMessage; ?></p>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Project. All rights reserved.</p>
    </footer>
</body>
</html>
