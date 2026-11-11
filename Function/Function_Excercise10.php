<?php
// =========================================
// Project 10: Student Management Mini Project
// Combines: arrays, functions, conditionals, forms
// =========================================
session_start();

if (!isset($_SESSION['students'])) {
    // seed with sample data
    $_SESSION['students'] = [
        ["name" => "Sreyleak", "marks" => 92],
        ["name" => "Pisey",    "marks" => 68],
        ["name" => "Rithy",    "marks" => 45],
    ];
}

function addStudent($name, $marks)
{
    $_SESSION['students'][] = ["name" => $name, "marks" => (float)$marks];
}

function deleteStudent($index)
{
    if (isset($_SESSION['students'][$index])) {
        array_splice($_SESSION['students'], $index, 1);
    }
}

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
    $colors = ["A" => "#2ecc71", "B" => "#3498db", "C" => "#f1c40f", "D" => "#e67e22", "F" => "#e74c3c"];
    return $colors[$grade];
}

function classAverage($students)
{
    if (count($students) === 0) return 0;
    $total = 0;
    foreach ($students as $s) {
        $total += $s['marks'];
    }
    return $total / count($students);
}

// Handle form actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        addStudent($_POST['name'], $_POST['marks']);
    }
    if (isset($_POST['delete_index'])) {
        deleteStudent((int)$_POST['delete_index']);
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$students = $_SESSION['students'];
$avg = classAverage($students);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>10. Student Management System</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            padding: 40px 15px;
            background: linear-gradient(135deg, #614385, #516395);
            display: flex;
            justify-content: center;
        }

        .wrap {
            width: 100%;
            max-width: 650px;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 25px;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        .panel {
            background: #fff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .panel h2 {
            color: #614385;
            margin-top: 0;
        }

        form {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        input {
            flex: 1;
            padding: 10px 14px;
            border: 2px solid #e0dbe8;
            border-radius: 10px;
            font-size: 14px;
            min-width: 120px;
        }

        button {
            background: linear-gradient(90deg, #614385, #516395);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        button.del {
            background: linear-gradient(90deg, #ff5f6d, #ffc371);
            padding: 6px 12px;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            text-align: left;
            padding: 10px;
            color: #516395;
            border-bottom: 2px solid #eee;
        }

        td {
            padding: 10px;
        }

        tr:nth-child(even) {
            background: #f7f5fb;
        }

        .grade-pill {
            display: inline-block;
            width: 26px;
            height: 26px;
            line-height: 26px;
            text-align: center;
            border-radius: 50%;
            color: white;
            font-weight: bold;
            font-size: 13px;
        }

        .stat-bar {
            display: flex;
            justify-content: space-between;
            background: linear-gradient(90deg, #614385, #516395);
            color: white;
            padding: 15px 20px;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <h1>🏫 Project 10: Student Management Mini Project</h1>

        <div class="panel">
            <h2>➕ Add Student</h2>
            <form method="POST">
                <input type="text" name="name" placeholder="Student name" required>
                <input type="number" step="0.1" name="marks" placeholder="Marks (0-100)" required>
                <button type="submit" name="add">Add</button>
            </form>
        </div>

        <div class="panel">
            <h2>📋 Student List</h2>
            <div class="stat-bar">
                <span>Total Students: <?= count($students) ?></span>
                <span>Class Average: <?= round($avg, 2) ?></span>
            </div>
            <table>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Marks</th>
                    <th>Grade</th>
                    <th></th>
                </tr>
                <?php foreach ($students as $i => $s): ?>
                    <?php $g = getGrade($s['marks']); ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= htmlspecialchars($s['name']) ?></td>
                        <td><?= $s['marks'] ?></td>
                        <td><span class="grade-pill" style="background:<?= gradeColor($g) ?>"><?= $g ?></span></td>
                        <td>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="delete_index" value="<?= $i ?>">
                                <button type="submit" class="del">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>