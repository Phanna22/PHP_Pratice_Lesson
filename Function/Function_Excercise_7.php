<?php
// =========================================
// Project 7: Default Parameter
// =========================================

function greet($name, $greeting = "Hello")
{
    return "$greeting, $name!";
}

$msg1 = greet("Alice");                 // uses default
$msg2 = greet("Bob", "Good Morning");   // overrides default
$msg3 = greet("Chan", "Suor Sdey");     // overrides default (Khmer greeting)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>7. Default Parameter</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #a18cd1, #fbc2eb);
        }

        .card {
            background: #fff;
            padding: 35px 45px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            min-width: 340px;
        }

        h1 {
            text-align: center;
            color: #8e5ea8;
            margin-bottom: 20px;
        }

        .bubble {
            padding: 14px 20px;
            border-radius: 18px;
            margin-bottom: 12px;
            font-weight: bold;
            color: white;
        }

        .b1 {
            background: linear-gradient(90deg, #a18cd1, #8e5ea8);
        }

        .b2 {
            background: linear-gradient(90deg, #fbc2eb, #e37fc4);
            color: #5c2b66;
        }

        .b3 {
            background: linear-gradient(90deg, #a18cd1, #fbc2eb);
        }

        .tag {
            display: block;
            font-size: 11px;
            font-weight: normal;
            opacity: 0.85;
            margin-top: 3px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>⚙️ Project 7: Default Parameter</h1>
        <div class="bubble b1"><?= $msg1 ?><span class="tag">Used default greeting</span></div>
        <div class="bubble b2"><?= $msg2 ?><span class="tag">Overridden greeting</span></div>
        <div class="bubble b3"><?= $msg3 ?><span class="tag">Overridden greeting</span></div>
    </div>
</body>

</html>