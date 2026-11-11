<?php
// =========================================
// Project 3: Addition (Return Value)
// =========================================

function addNumbers($a, $b)
{
    return $a + $b;
}

$num1 = 15;
$num2 = 27;
$result = addNumbers($num1, $num2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>3. Addition</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ff5f6d, #ffc371);
        }

        .card {
            background: #fff;
            padding: 40px 55px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            color: #ff5f6d;
            margin-bottom: 25px;
        }

        .equation {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            font-size: 28px;
            font-weight: bold;
        }

        .box {
            background: #fff0ec;
            color: #ff5f6d;
            padding: 15px 20px;
            border-radius: 12px;
            min-width: 50px;
        }

        .result {
            background: linear-gradient(90deg, #ff5f6d, #ffc371);
            color: white;
            padding: 15px 25px;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>➕ Project 3: Addition</h1>
        <div class="equation">
            <div class="box"><?= $num1 ?></div>
            <span>+</span>
            <div class="box"><?= $num2 ?></div>
            <span>=</span>
            <div class="result"><?= $result ?></div>
        </div>
    </div>
</body>

</html>