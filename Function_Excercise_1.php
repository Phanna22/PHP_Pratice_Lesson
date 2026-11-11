<?php

// Function 1: Welcome to PHP
function welcomePHP() {
    echo "Welcome to PHP Programming!";
}

// Function 2: Welcome to Web Development
function welcomeWeb() {
    echo "Welcome to Web Development!";
}

// Function 3: Welcome to My Website
function welcomeWebsite() {
    echo "Welcome to My Website!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Project 1 - Welcome Function</title>
</head>
<body>

    <h1>Welcome Function Project</h1>

    <h3>Message 1:</h3>
    <?php welcomePHP(); ?>

    <h3>Message 2:</h3>
    <?php welcomeWeb(); ?>

    <h3>Message 3:</h3>
    <?php welcomeWebsite(); ?>

</body>
</html>