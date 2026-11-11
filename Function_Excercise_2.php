<?php

// Function: Personal Information
function myInfo($name, $age, $gender, $address)
{

    echo "<div class='profile-card'>";

    echo "<h2>Personal Information</h2>";

    echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";

    echo "<p><strong>Age:</strong> " . htmlspecialchars((string)$age) . "</p>";

    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";

    echo "<p><strong>Address:</strong> " . htmlspecialchars($address) . "</p>";

    echo "</div>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Project 2 - Personal Information</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #1e293b;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .profile-card {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 12px;
            box-shadow: 0 3px 10px #00000015;
        }

        .profile-card h2 {
            color: #2563eb;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .profile-card p {
            font-size: 16px;
            color: #334155;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Personal Information System</h1>

        <?php

        myInfo("Dara", 20, "Male", "Phnom Penh");

        myInfo("Sopheak", 22, "Male", "Kandal");

        myInfo("Lina", 19, "Female", "Siem Reap");

        ?>

    </div>

</body>

</html>