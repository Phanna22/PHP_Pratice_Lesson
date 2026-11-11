<?php
// =========================================
// Project 6: Maximum Number
// =========================================

function findMax($a, $b, $c)
{
    if ($a >= $b && $a >= $c) return $a;
    elseif ($b >= $a && $b >= $c) return $b;
    else return $c;
}

$n1 = 42;
$n2 = 97;
$n3 = 65;
$max = findMax($n1, $n2, $n3);
$numbers = [$n1, $n2, $n3];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>6. Maximum Number</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f7971e, #ffd200);
        }

        .card {
            background: #fff;
            padding: 40px 50px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            color: #e67e22;
            margin-bottom: 25px;
        }

        .numbers {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-bottom: 20px;
        }

        .num {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            background: #fef3d9;
            color: #e67e22;
            border: 3px solid #ffd200;
        }

        .num.winner {
            background: linear-gradient(135deg, #f7971e, #ffd200);
            color: white;
            transform: scale(1.2);
            box-shadow: 0 0 20px rgba(247, 151, 30, 0.6);
        }

        .label {
            font-size: 20px;
            font-weight: bold;
            color: #e67e22;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>🏆 Project 6: Maximum Number</h1>
        <div class="numbers">
            <?php foreach ($numbers as $n): ?>
                <div class="num <?= $n == $max ? 'winner' : '' ?>"><?= $n ?></div>
            <?php endforeach; ?>
        </div>
        <div class="label">Maximum Value: <?= $max ?> 🎉</div>
    </div>
</body>

</html>