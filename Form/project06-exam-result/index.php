<?php
session_start();
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
$result = null; $error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name=trim($_POST['name']??''); $scores=[]; foreach(['html','css','php'] as $k){$v=filter_var($_POST[$k]??'',FILTER_VALIDATE_INT);if($v===false||$v<0||$v>100){$error='Each score must be between 0 and 100.';break;}$scores[]=$v;}
if(!$error && $name!==''){ $avg=array_sum($scores)/3; $grade=$avg>=90?'A':($avg>=80?'B':($avg>=70?'C':($avg>=60?'D':'F'))); $result=['Student'=>$name,'Total'=>array_sum($scores).' / 300','Average'=>number_format($avg,2),'Grade'=>$grade,'Status'=>$avg>=50?'Pass':'Fail']; } elseif(!$error){$error='Enter student name.';}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exam Result Calculator | PHP Form Lab</title>
<link rel="stylesheet" href="../assets/style.css">
<script defer src="../assets/app.js"></script>
</head>
<body>
<main class="wrap">
  <div class="top"><div><div class="brand">PHP FORM LAB · PROJECT 06</div><div class="muted">Learn by building</div></div><span class="pill">PHP + CSS + JavaScript</span></div>
  <h1>Exam Result Calculator</h1><p class="lead">Calculate total, average, grade and pass/fail. Submit the form to see PHP process and validate your data.</p>
  <div class="layout">
    <section class="card">
      <h2>✦ Enter your details</h2>
      <form method="POST" novalidate>
        <div class="fields">
          <div class="field"><label>Student name</label><input name="name" required></div>
<div class="field"><label>HTML score (0-100)</label><input name="html" type="number" min="0" max="100" required></div>
<div class="field"><label>CSS score (0-100)</label><input name="css" type="number" min="0" max="100" required></div>
<div class="field"><label>PHP score (0-100)</label><input name="php" type="number" min="0" max="100" required></div>
        </div>
        <div class="actions"><button type="submit">Submit form ↗</button><a class="btn" href="../index.html">All projects</a></div>
      </form>
      <?php if ($error): ?><div class="result error"><strong>Check your input</strong><br><?= e($error) ?></div><?php endif; ?>
      <?php if ($result): ?>
        <div class="result"><strong>✓ Result</strong>
          <?php foreach ($result as $key=>$value): ?><div><strong><?= e($key) ?>:</strong> <?= e($value) ?></div><?php endforeach; ?>
        </div>
      <?php endif; ?>
    </section>
    <aside class="card">
      <h2>Project guide</h2><div class="stat">06/10</div>
      <p class="muted">Displays total, average, grade and pass/fail status.</p>
      <h2 style="margin-top:24px">What you practise</h2>
      <ul class="list"><li>HTML form fields</li><li>PHP <code>$_POST</code></li><li>Server-side validation</li><li>Safe output with <code>htmlspecialchars()</code></li><li>Responsive CSS and JavaScript</li></ul>
      <span class="tag">Beginner friendly</span><span class="tag">Responsive UI</span>
    </aside>
  </div>
  <footer>Built for practice · PHP Form Lab</footer>
</main>
</body></html>
