<?php
// =========================================
// Project 8: Student Grade
// =========================================

function getGrade($marks)
{
    if ($marks >= 90) return "A";
    elseif ($marks >= 75) return "B";
    elseif ($marks >= 60) return "C";
    elseif ($marks >= 50) return "D";
    else return "F";
}

function gradeColor($grade)
{
    $colors = [
        "A" => "#2ecc71",
        "B" => "#3498db",
        "C" => "#f1c40f",
        "D" => "#e67e22",
        "F" => "#e74c3c",
    ];
    return $colors[$grade];
}

$students = [
    ["name" => "Sreyleak", "marks" => 95],
    ["name" => "Pisey",    "marks" => 81],
    ["name" => "Rithy",    "marks" => 68],
    ["name" => "Channary", "marks" => 52],
    ["name" => "Veasna",   "marks" => 35],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>8. Student Grade</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #42275a, #734b6d);
        }

        .card {
            background: #fff;
            padding: 35px 45px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            min-width: 360px;
        }

        h1 {
            text-align: center;
            color: #42275a;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 10px;
            color: #734b6d;
            border-bottom: 2px solid #eee;
        }

        td {
            padding: 10px;
        }

        tr:nth-child(even) {
            background: #faf6fb;
        }

        .grade-pill {
            display: inline-block;
            width: 28px;
            height: 28px;
            line-height: 28px;
            text-align: center;
            border-radius: 50%;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>🎓 Project 8: Student Grade</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Marks</th>
                <th>Grade</th>
            </tr>
            <?php foreach ($students as $s): ?>
                <?php $g = getGrade($s['marks']); ?>
                <tr>
                    <td><?= $s['name'] ?></td>
                    <td><?= $s['marks'] ?></td>
                    <td><span class="grade-pill" style="background:<?= gradeColor($g) ?>"><?= $g ?></span></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>