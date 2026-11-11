<?php
// =========================================
// Project 4: Calculate Area
// =========================================

function rectangleArea($length, $width) {
    return $length * $width;
}

function circleArea($radius) {
    return 3.14159 * $radius * $radius;
}

$rect = rectangleArea(8, 5);
$circle = circleArea(4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>4. Calculate Area</title>
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #36d1dc, #5b86e5);
    }
    .wrap {
        display: flex;
        gap: 25px;
    }
    .card {
        background: #fff;
        padding: 30px 35px;
        border-radius: 18px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        text-align: center;
        width: 200px;
    }
    h1 { grid-column: span 2; text-align:center; color: white; }
    .shape {
        font-size: 45px;
        margin-bottom: 10px;
    }
    .rect .shape { color: #5b86e5; }
    .circ .shape { color: #36d1dc; }
    .value {
        font-size: 22px;
        font-weight: bold;
        margin-top: 10px;
        padding: 10px;
        border-radius: 10px;
        color: white;
    }
    .rect .value { background: #5b86e5; }
    .circ .value { background: #36d1dc; }
    h2 { font-size: 16px; color: #444; }
</style>
</head>
<body>
    <div>
        <h1 style="margin-bottom:25px;">📐 Project 4: Calculate Area</h1>
        <div class="wrap">
            <div class="card rect">
                <div class="shape">▭</div>
                <h2>Rectangle (8 × 5)</h2>
                <div class="value"><?= $rect ?></div>
            </div>
            <div class="card circ">
                <div class="shape">◯</div>
                <h2>Circle (r = 4)</h2>
                <div class="value"><?= round($circle, 2) ?></div>
            </div>
        </div>
    </div>
</body>
</html>