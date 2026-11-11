<?php
// =========================================
// Project 9: Array Function
// =========================================

function arraySum($numbers)
{
    $total = 0;
    foreach ($numbers as $n) {
        $total += $n;
    }
    return $total;
}

function arrayAverage($numbers)
{
    return arraySum($numbers) / count($numbers);
}

function arrayMax($numbers)
{
    return max($numbers);
}

function arrayMin($numbers)
{
    return min($numbers);
}

$nums = [12, 45, 7, 89, 23, 56, 34];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>9. Array Function</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        }

        .card {
            background: #fff;
            padding: 35px 45px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            text-align: center;
            min-width: 380px;
        }

        h1 {
            color: #203a43;
            margin-bottom: 20px;
        }

        .array-list {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .item {
            background: #2c5364;
            color: white;
            padding: 10px 14px;
            border-radius: 10px;
            font-weight: bold;
        }

        .stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .stat {
            background: linear-gradient(135deg, #0f2027, #2c5364);
            color: white;
            padding: 14px;
            border-radius: 12px;
        }

        .stat .val {
            font-size: 22px;
            font-weight: bold;
        }

        .stat .lbl {
            font-size: 12px;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>📊 Project 9: Array Function</h1>
        <div class="array-list">
            <?php foreach ($nums as $n): ?>
                <div class="item"><?= $n ?></div>
            <?php endforeach; ?>
        </div>
        <div class="stats">
            <div class="stat">
                <div class="val"><?= arraySum($nums) ?></div>
                <div class="lbl">SUM</div>
            </div>
            <div class="stat">
                <div class="val"><?= round(arrayAverage($nums), 2) ?></div>
                <div class="lbl">AVERAGE</div>
            </div>
            <div class="stat">
                <div class="val"><?= arrayMax($nums) ?></div>
                <div class="lbl">MAX</div>
            </div>
            <div class="stat">
                <div class="val"><?= arrayMin($nums) ?></div>
                <div class="lbl">MIN</div>
            </div>
        </div>
    </div>
</body>

</html>